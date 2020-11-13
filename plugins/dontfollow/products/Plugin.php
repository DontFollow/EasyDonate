<?php namespace DontFollow\Products;

use Event;
use Backend;
use System\Classes\PluginBase;
use DontFollow\Products\Models\Product;

/**
 * Products Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = [
        'DontFollow.Servers'
    ];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Товары',
            'description' => 'Плагин для добавления товаров.',
            'author'      => 'DontFollow',
            'icon'        => 'icon-shopping-cart'
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
            'DontFollow\Products\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'dontfollow.products.create' => [
                'tab' => 'Работа с товарами',
                'label' => 'Создание товара'
            ],
            'dontfollow.products.update' => [
                'tab' => 'Работа с товарами',
                'label' => 'Изменение товара'
            ],
            'dontfollow.products.delete' => [
                'tab' => 'Работа с товарами',
                'label' => 'Удаление товара'
            ],
            'dontfollow.products.preview' => [
                'tab' => 'Работа с товарами',
                'label' => 'Просмотр товара'
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
        return [
            'products' => [
                'label'       => 'Товары',
                'url'         => Backend::url('dontfollow/products/products'),
                'icon'        => 'icon-shopping-cart',
                'permissions' => ['dontfollow.products.*'],
                'order'       => 200,
                'sideMenu' => [
                    'showProducts' => [
                        'label'       => 'Список товаров',
                        'icon'        => 'icon-list',
                        'url'         => Backend::url('dontfollow/products/products')
                    ],
                    'showCategories' => [
                        'label' => 'Список категорий',
                        'icon' => 'icon-tags',
                        'url' => Backend::url('dontfollow/products/categories')
                    ]
                ]
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'Settings' => [
                'label'       => 'Товары',
                'description' => 'Настройки товаров.',
                'category'    => 'Настройки модулей',
                'class'       => 'DontFollow\Products\Models\Settings',
                'icon'        => 'icon-shopping-cart',
                'order'       => 500
            ],
        ];
    }
}
