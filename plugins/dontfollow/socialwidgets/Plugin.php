<?php namespace DontFollow\SocialWidgets;

use Backend;
use System\Classes\PluginBase;

/**
 * SocialWidgets Plugin Information File
 */
class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Виджеты социальных сетей',
            'description' => 'Плагин интеграции виджетов социальных сетей.',
            'author'      => 'DontFollow',
            'icon'        => 'icon-leaf'
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
            'DontFollow\SocialWidgets\Components\CommunityPosts' => 'CommunityPosts',
        ];
    }

    public function registerSettings(): array
    {
        return [
            'Vk.CommunityPosts' => [
                'label'       => 'Виджет сообщества',
                'description' => 'Настройки интеграции Вашего виджета сообщества ВКонтакте.',
                'category'    => 'Виджеты социальных сетей',
                'class'       => 'DontFollow\SocialWidgets\Models\Vk\CommunityPosts',
                'icon'        => 'icon-vk',
                'order'       => 500
            ],
        ];
    }
}
