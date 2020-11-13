<?php namespace DontFollow\Products\Models;

use Model;
use DontFollow\Servers\Models\Server;

/**
 * Category Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'product_categories';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [
        'name' => 'required|between:3,64',
        'description' => 'nullable|between:3,255'
    ];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public $hasMany = [
        'products' => [
            'DontFollow\Products\Models\Product'
        ]
    ];
}
