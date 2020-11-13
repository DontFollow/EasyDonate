<?php namespace DontFollow\Payments\Models;

use Model;

/**
 * Shop Model
 */
class UnitPay extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'public_key' => 'required',
        'secret_key' => 'required',
    ];

    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'DontFollow.Payments::UnitPay';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
