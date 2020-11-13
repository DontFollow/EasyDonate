<?php namespace DontFollow\Payments\Models;

use Model;

/**
 * Category Model
 */
class PaymentProduct extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'payment_product';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

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
        'first_delete',
        'image',
        'payment_id',
        'amount'
    ];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public $belongsTo = [
        'payment' => [
            'DontFollow\Payments\Models\Payment'
        ]
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
}
