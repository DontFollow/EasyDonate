<?php namespace DontFollow\Products\Models;

use Model;
use Session;
use ApplicationException;
use DontFollow\Shop\Models\Cart;
use DontFollow\Servers\Models\Server;
use DontFollow\Shop\Models\CartProduct;
use DontFollow\Products\Models\Category;

/**
 * Product Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'products';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    protected $appends = ['cost'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'title',
        'description',
        'short_description',
        'minecraft_id',
        'number',
        'type',
        'group_lifetime',
        'group_temp_modifier',
        'case_type',
        'case_content',
        'force_commands',
        'price',
        'sale',
        'category_id',
        'first_delete'
    ];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [
        'title' => 'required|between:3,255',
        'description' => 'nullable|between:3,65535',
        'short_description' => 'nullable|between:3,32',
        'minecraft_id' => 'required_if:type,item,group|nullable|string|between:1,255',
        'number' => 'required_if:type,item|nullable|numeric|between:1,256',
        'type' => 'required|in:item,group,case,coin,other|string',
        'group_lifetime' => 'required_if:type,group|nullable|numeric',
        'group_temp_modifier' => 'required_if:type,group|nullable|string|in:s,m,h,d,mo',
        'case_type' => 'required_if:type,case|nullable|string|in:Physical,Virtual',
        'case_content' => 'required_if:type,case|nullable|string|in:Money,Donate,Item',
        'force_commands' => 'required_if:type,other|nullable|array',
        'price' => 'required|numeric|min:1',
        'sale' => 'nullable|numeric|min:0',
        'category_id' => 'required|numeric|exists:product_categories,id',
        'first_delete' => 'nullable|boolean'
    ];

    /**
     * @var array Attributes to be cast to JSON
     */
    protected $jsonable = ['force_commands'];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'category' => [
            'DontFollow\Products\Models\Category'
        ]
    ];

    public $belongsToMany = [
        'servers' => 'DontFollow\Servers\Models\Server'
    ];

    public $hidden = [
        'zest'
    ];

    public function scopeInSelectedServer($query)
    {
        $server = Server::selected();
        if (!$server) {
            return $query;
        }

        return $query->where('server_id', $server->id);
    }

    public function getCategoryIdOptions()
    {
        $categories = [];

        Category::all()->each(function ($category) use (&$categories) {
            $categories[$category->id] = $category->name;
        });

        return $categories;
    }

    public function setZestAttribute($zest)
    {
        $this->attributes['zest'] = $zest;
    }

    public function getZestAttribute()
    {
        return isset($this->attributes['zest'])
            ? $this->attributes['zest']
            : false;
    }

    public function getCostAttribute()
    {
        return $this->price - $this->sale;
    }

    public function getImageAttribute($image)
    {
        return $image ?: Settings::get('default_image', '/defaults/product.png');
    }

    public function getAmountAttribute()
    {
        $cart = Cart::instance();

        $query = CartProduct::whereProductId($this->id)->whereCartId($cart->id);

        if ($cart && $query->exists()) {
            $amount = $query->pluck('amount')->first();
            return $amount;
        }

        return 1;
    }

    public function beforeSave()
    {
        if ($this->price <= $this->sale) {
            throw new ApplicationException('Цена не может быть ниже скидки.');
        }

        if (isset($this->attributes['zest'])) {
            unset($this->attributes['zest']);
        }
    }

    public function afterSave()
    {
        if ($this->servers->count() > 0) {
            return true;
        }

        Server::all()->each(function ($server) {
            $this->servers()->add($server);
        });
    }
}
