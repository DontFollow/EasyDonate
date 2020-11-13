<?php namespace DontFollow\Promocodes;

use Backend;
use System\Classes\PluginBase;

/**
 * Promocodes Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = [
        'DontFollow.Shop'
    ];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Промокоды',
            'description' => 'Плагин промокодов.',
            'author'      => 'DontFollow',
            'icon'        => 'icon-code'
        ];
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'DontFollow\Promocodes\Components\Promocodes' => 'Promocodes',
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'promocodes' => [
                'label'       => 'Промокоды',
                'url'         => Backend::url('dontfollow/promocodes/promocodes'),
                'icon'        => 'icon-code',
                'permissions' => ['dontfollow.promocodes.*'],
                'order'       => 410,
            ],
        ];
    }
}
