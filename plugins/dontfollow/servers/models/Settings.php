<?php namespace DontFollow\Servers\Models;

use Model;

/**
 * Shop Model
 */
class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'cache.enabled' => 'boolean',
        'cache.timeout' => 'numeric|between:1,120',

        'rcon.checkConnectionBeforeSaveServer' => 'boolean',

        'query.timeout' => 'numeric|between:1,3'
    ];

    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'DontFollow.Servers::Settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
