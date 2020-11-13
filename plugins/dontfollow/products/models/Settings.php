<?php namespace DontFollow\Products\Models;

use Model;

/**
 * Shop Model
 */
class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [

    ];

    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'DontFollow.Products::Settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
