<?php namespace DontFollow\SocialWidgets\Components;

use Cms\Classes\ComponentBase;
use DontFollow\SocialWidgets\Models\Vk\CommunityPosts as Settings;

class CommunityPosts extends ComponentBase
{
    public $settings;

    public function componentDetails()
    {
        return [
            'name'        => 'Виджет сообщества',
            'description' => 'Виджет Вашего сообвества ВКонтакте.'
        ];
    }

    public function init()
    {
        $this->settings = Settings::instance();
    }

    public function onRun()
    {
        $this->addJs('https://vk.com/js/api/openapi.js?168');
    }

    public function onRender()
    {
        return [
            '@#widgets' => $this->renderPartial('@community_posts', [
                'settings' => $this->settings
            ])
        ];
    }
}
