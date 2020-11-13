<?php namespace DontFollow\Payments\Models;

use Model;

/**
 * Category Model
 */
class Payment extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'payments';

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

    public $hasMany = [
        'products' => [
            'DontFollow\Payments\Models\PaymentProduct'
        ]
    ];

    public $belongsTo = [
        'server' => [
            'DontFollow\Servers\Models\Server'
        ]
    ];

    public function getCostAttribute($cost = 0)
    {
        $this->products->each(function ($product) use (&$cost) {
            $cost += $product->cost;
        });

        return $cost;
    }

    public function getAmountAttribute()
    {
        if ($this->products) {
            return $this->products->count();
        }

        return 0;
    }
}
