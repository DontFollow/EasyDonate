<?php namespace DontFollow\Promocodes\Models;

use Model;
use DontFollow\Servers\Models\Server;
use DontFollow\Products\Models\Product;

/**
 * Promocode Model
 */
class UserPromocode extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'username_promocode';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'username',
        'promocode_id',
        'uses',
    ];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [
        'username' => 'required|string|between:3,255',
        'promocode_id' => 'required|numeric|exists:promocodes,id',
        'uses' => 'nullable|numeric|min:1'
    ];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
