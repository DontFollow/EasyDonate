<?php namespace DontFollow\Servers;

use Event;
use Backend;
use System\Classes\PluginBase;

/**
 * Servers Plugin Information File
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
            'name'        => 'Серверы',
            'description' => 'Плагин на добавление серверов.',
            'author'      => 'DontFollow',
            'icon'        => 'icon-server'
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
            'DontFollow\Servers\Components\Servers' => 'Servers',
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
            'dontfollow.servers.create' => [
                'tab' => 'Работа с серверами',
                'label' => 'Создание сервера'
            ],
            'dontfollow.servers.update' => [
                'tab' => 'Работа с серверами',
                'label' => 'Изменение сервера'
            ],
            'dontfollow.servers.delete' => [
                'tab' => 'Работа с серверами',
                'label' => 'Удаление сервера'
            ],
            'dontfollow.servers.preview' => [
                'tab' => 'Работа с серверами',
                'label' => 'Просмотр сервера'
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
            'servers' => [
                'label'       => 'Серверы',
                'url'         => Backend::url('dontfollow/servers/servers'),
                'icon'        => 'icon-server',
                'permissions' => ['dontfollow.servers.*'],
                'order'       => 400,
                'sideMenu' => [
                    'showServers' => [
                        'label'       => 'Список серверов',
                        'icon'        => 'icon-list',
                        'url'         => Backend::url('dontfollow/servers/servers')
                    ],
                    'createServer' => [
                        'label' => 'Добавить сервер',
                        'icon' => 'icon-plus',
                        'url' => Backend::url('dontfollow/servers/servers/create')
                    ]
                ]
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'Settings' => [
                'label'       => 'Серверы',
                'description' => 'Настройки серверов.',
                'category'    => 'Настройки модулей',
                'class'       => 'DontFollow\Servers\Models\Settings',
                'icon'        => 'icon-server',
                'order'       => 500
            ],
        ];
    }
}
