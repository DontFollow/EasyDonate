<?php namespace DontFollow\Shop\Models;

use Model;
use Session;
use DontFollow\Servers\Models\Server;
use DontFollow\Products\Models\Product;

/**
 * Category Model
 */
class CartProduct extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'product_id' => 'required|exists:products,id',
        'category_id' => 'required|exists:product_categories,id',
        'cart_id' => 'required|exists:carts,id',
        'server_id' => 'required|exists:servers,id',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'cart_product';

    public $fillable = [
        'product_id',
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
        'first_delete',
        'image',
        'cart_id',
        'server_id',
        'amount',
        'zest'
    ];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    public $belongsTo = [
        'cart' => [
            'DontFollow\Shop\Models\Cart'
        ],
        'server' => [
            'DontFollow\Servers\Models\Server'
        ],
        'category' => [
            'DontFollow\Products\Models\Category'
        ]
    ];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $jsonable = ['force_commands'];

    public function getCostAttribute()
    {
        return $this->amount * ($this->price - $this->sale);
    }

    public function getCountAttribute()
    {
        return $this->number * $this->amount;
    }

    public function scopeInSelectedServer($query)
    {
        $server = Server::selected();
        if (!$server) {
            return $query;
        }

        $query->where('server_id', $server->id);
        return $query;
    }
}
