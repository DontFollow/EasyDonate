<?php namespace DontFollow\Payments;

use Config;
use Backend;
use System\Classes\PluginBase;

/**
 * Payments Plugin Information File
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
            'name'        => 'Платежи',
            'description' => 'Платежи для EasyDonate.',
            'author'      => 'DontFollow',
            'icon'        => 'icon-credit-card'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'DontFollow\Payments\Components\UnitPay' => 'UnitPay',
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
            'payments' => [
                'label'       => 'Платежи',
                'url'         => Backend::url('dontfollow/payments/payments'),
                'icon'        => 'icon-credit-card',
                'permissions' => ['dontfollow.payments.*'],
                'order'       => 300,
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'Settings' => [
                'label'       => 'UnitPay',
                'description' => 'Настройки платежной системы UnitPay.',
                'category'    => 'Платежные системы',
                'class'       => 'DontFollow\Payments\Models\UnitPay',
                'icon'        => 'icon-space-shuttle',
                'order'       => 500
            ],
        ];
    }
}
