<?php namespace DontFollow\MoreProducts;

use Backend;
use System\Classes\PluginBase;

/**
 * MoreProducts Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'MoreProducts',
            'description' => 'No description provided yet...',
            'author'      => 'DontFollow',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

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
        return []; // Remove this line to activate

        return [
            'DontFollow\MoreProducts\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'dontfollow.moreproducts.some_permission' => [
                'tab' => 'MoreProducts',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'moreproducts' => [
                'label'       => 'MoreProducts',
                'url'         => Backend::url('dontfollow/moreproducts/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['dontfollow.moreproducts.*'],
                'order'       => 500,
            ],
        ];
    }
}
