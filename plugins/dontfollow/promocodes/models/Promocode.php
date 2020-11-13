<?php namespace DontFollow\Promocodes\Models;

use Model;
use Session;
use DontFollow\Servers\Models\Server;
use DontFollow\Products\Models\Product;

/**
 * Promocode Model
 */
class Promocode extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'promocodes';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'title',
        'description',
        'code',
        'sale',
        'limit',
        'products',
        'product_types',
        'servers',
        'is_active',
        'expires_at'
    ];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [
        'title' => 'required|string|between:3,255',
        'description' => 'required|string|between:3,255',
        'code' => 'required|string|between:2,255',
        'sale' => 'required|numeric|between:1,100',
        'limit' => 'nullable|numeric|min:1',
        'products' => 'nullable|array|min:1',
        'products.*' => 'nullable|numeric|exists:products,id',
        'product_types' => 'nullable|array|min:1',
        'product_types.*' => 'nullable|string|in:item,group,case,coin,other',
        'servers' => 'nullable|array|min:1',
        'servers.*' => 'nullable|numeric|exists:servers,id',
        'is_active' => 'required|boolean',
        'expires_at' => 'nullable|date|after:now'
    ];

    /**
     * @var array Attributes to be cast to JSON
     */
    protected $jsonable = [
        'products',
        'product_types',
        'servers'
    ];

    public $hasOne = [
        'user' => 'DontFollow\Promocodes\Models\UserPromocode'
    ];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->hasOne('DontFollow\Promocodes\Models\UserPromocode')->where('username', Session::get('username'));
    }

    public function getProductsOptions()
    {
        $products = [];
        Product::all()->each(function ($product) use (&$products) {
            $products[$product->id] = $product->title;
        });

        return $products;
    }

    public function getServersOptions()
    {
        $servers = [];
        Server::all()->each(function ($server) use (&$servers) {
            $servers[$server->id] = $server->name;
        });

        return $servers;
    }

    public function fix($username)
    {
        $userPromocode = UserPromocode::firstOrNew([
            'username' => $username,
            'promocode_id' => $this->id
        ]);

        $userPromocode->uses++;
        $userPromocode->save();
    }
}
