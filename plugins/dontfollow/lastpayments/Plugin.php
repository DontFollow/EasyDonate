<?php namespace DontFollow\LastPayments;

use Backend;
use System\Classes\PluginBase;

/**
 * LastPayments Plugin Information File
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
            'name'        => 'Последние покупки',
            'description' => 'Плагин для вывода последних покупок игроков в режиме реального времени.',
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
        return [
            'DontFollow\LastPayments\Components\LastPayments' => 'LastPayments',
        ];
    }

    public function registerSettings()
    {
        return [
            'Settings' => [
                'label'       => 'Последние покупки',
                'description' => 'Настройки отображения последних покупок игроков.',
                'category'    => 'Настройки модулей',
                'class'       => 'DontFollow\LastPayments\Models\Settings',
                'icon'        => 'icon-shopping-cart',
                'order'       => 600
            ],
        ];
    }
}
