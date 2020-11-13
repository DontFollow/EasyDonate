<?php namespace DontFollow\SocialWidgets\Models\Vk;

use Model;

class CommunityPosts extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [

    ];

    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'Settings/Vk/CommunityPosts';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
