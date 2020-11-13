<?php namespace DontFollow\Shop;

use Backend;
use System\Classes\PluginBase;
use DontFollow\Products\Models\Product;

/**
 * Shop Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = [
        'DontFollow.Products'
    ];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Магазин',
            'description' => 'Магазин для EasyDonate.',
            'author'      => 'DontFollow',
            'icon'        => 'icon-shopping-cart'
        ];
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        Product::extend(function($product) {
            $product->bindEvent('model.afterFetch', function() use ($product) {
                if ($product->zest) {
                    return false;
                }

                if ($product->sale > 0) {
                    $product->zest = 'Скидка';
                }

                if ($product->first_delete) {
                    $product->zest = 'Последний';
                }
            });
        });
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'DontFollow\Shop\Components\Shop' => 'Shop',
        ];
    }
}
