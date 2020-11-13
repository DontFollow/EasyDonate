<?php namespace DontFollow\Shop\Models;

use Model;
use Session;
use Carbon\Carbon;
use Thedudeguy\Rcon;
use ApplicationException;
use DontFollow\Servers\Models\Server;
use DontFollow\Products\Models\Product;
use DontFollow\Payments\Classes\CheckOut;
use DontFollow\Products\Models\Settings as ProductsSettings;

/**
 * Category Model
 */
class Cart extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'carts';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected static function boot()
    {
        parent::boot();
        self::clear();
    }

    private static function clear()
    {
        return self::where('created_at', '<=', Carbon::now()->subMinutes(config('session.lifetime', 120)))->delete();
    }

    public static function instance()
    {
        $cart_id = Session::get('cart', false);
        if (!$cart_id) {
            self::create();
        }

        $cart = self::find(Session::get('cart', false));
        if (!$cart) {
            $cart = self::create();
        }

        return $cart;
    }

    public function afterCreate()
    {
        return Session::put('cart', $this->id);
    }

    public function getCostAttribute($cost = 0)
    {
        $this->products->each(function ($product) use (&$cost) {
            $cost += $product->cost;
        });

        return $cost;
    }

    public function getProductsAttribute()
    {
        $server = Server::selected();
        if (!$server) {
            return collect([]);
        }

        return CartProduct::whereCartId($this->id)->whereServerId($server->id)->get();
    }

    public function getServerAttribute()
    {
        return Server::selected();
    }

    public function getOwnerAttribute()
    {
        return Session::get('username');
    }

    public function products()
    {
        return $this->products;
    }

    public function empty()
    {
        return $this->products->isEmpty();
    }

    public function count()
    {
        return $this->products->count();
    }

    public function findBy($key, $value)
    {
        return $this->products->where($key, $value);
    }

    public function has($product)
    {
        return $this->products->where('product_id', $product->id)->first();
    }

    public function add($product)
    {
        CartProduct::create([
            'product_id' => $product->id,
            'title' => $product->title,
            'description' => $product->description,
            'short_description' => $product->short_description,
            'minecraft_id' => $product->minecraft_id,
            'number' => $product->number,
            'type' => $product->type,
            'group_lifetime' => $product->group_lifetime,
            'group_temp_modifier' => $product->group_temp_modifier,
            'case_type' => $product->case_type,
            'case_content' => $product->case_content,
            'force_commands' => $product->force_commands,
            'price' => $product->price,
            'sale' => $product->sale,
            'category_id' => $product->category->id,
            'first_delete' => $product->first_delete,
            'image' => $product->image,
            'cart_id' => $this->id,
            'server_id' => $this->server->id,
            'amount' => $product->amount,
            'zest' => $product->zest
        ]);

        return $product;
    }

    public function remove($product)
    {
        $_product = $this->products->where('product_id', $product instanceof CartProduct ? $product->product_id : $product->id)->first();
        if (!$_product) {
            throw new ApplicationException('Товар не найден в корзине.');
        }

        if (!$_product) {
            throw new ApplicationException('Товар не найден в корзине.');
        }

        $_product->delete();
        return $product;
    }

    public function increase($product, $amount = 1)
    {
        $product = $this->products->where('product_id', $product instanceof CartProduct ? $product->product_id : $product->id)->first();
        if (!$product) {
            throw new ApplicationException('Товар не найден в корзине.');
        }

        $product->amount += $amount;
        $product->save();
        return $product;
    }

    public function decrease($product, $amount = 1)
    {
        $product = $this->products->where('product_id', $product instanceof CartProduct ? $product->product_id : $product->id)->first();
        if (!$product) {
            throw new ApplicationException('Товар не найден в корзине.');
        }

        $product->amount -= $amount;
        $product->save();
        return $product;
    }

    public function flush()
    {
        return $this->products->each(function ($product) {
            return $this->remove($product);
        });
    }

    public function checkout($username, $timeout = 1)
    {
        if (!$this->server) {
            throw new ApplicationException('Выберите сервер');
        }

        if (!$this->server->info) {
            throw new ApplicationException('Сервер недоступен, покупки невозможны.');
        }

        $rcon = new Rcon(
            $this->server->ip,
            $this->server->rcon_port,
            $this->server->rcon_password,
            $timeout
        );

        try {
            $rcon->connect();
        } catch (\Exception $e) {
            throw new ApplicationException('Сервер недоступен, покупки невозможны.');
        }

        return CheckOut::make($username, $this, ProductsSettings::get('force_delivery', false));
    }
}
