<?php namespace LukeTowers\EssentialVars;

use App;
use Lang;
use View;
use Event;
use Config;
use Backend;
use System\Classes\PluginBase;
use Backend\Models\BrandSetting;

/**
 * EssentialVars Plugin Information File
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
            'name'        => 'EssentialVars',
            'description' => 'Дополнительные параметры.',
            'author'      => 'Luke Towers',
            'icon'        => 'icon-code',
        ];
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        App::before(function () {
            Event::listen('mailer.beforeAddContent', function () {
                View::share('app_url', url('/'));
                View::share('app_logo', BrandSetting::get('logo', Backend::skinAsset('assets/images/logo.png')));
                View::share('app_favicon', BrandSetting::get('favicon', Backend::skinAsset('assets/images/favicon.png')));
                View::share('app_name', BrandSetting::get('app_name', 'EasyDonate'));
                View::share('app_debug', config('app.debug', false));
                View::share('app_description', BrandSetting::get('app_tagline', 'Turn on the Lights'));
                View::share('vk_link', BrandSetting::get('vk_link', false));
                View::share('discord_link', BrandSetting::get('discord_link', false));
                View::share('youtube_link', BrandSetting::get('youtube_link', false));
            });

            Event::listen('cms.page.beforeDisplay', function ($controller, $url, $page) {
                $controller->vars['app_url'] = url('/');
                $controller->vars['app_logo'] = BrandSetting::getLogo() ?: Backend::skinAsset('assets/images/logo.png');
                $controller->vars['app_favicon'] = BrandSetting::getFavicon() ?: Backend::skinAsset('assets/images/favicon.png');
                $controller->vars['app_background'] = BrandSetting::getBackground() ?: url(config('storage.media.path', '/storage/app/media') . '/defaults/background.jpg');
                $controller->vars['app_side'] = BrandSetting::getSide() ?: url(config('storage.media.path', '/storage/app/media') . '/defaults/side.png');
                $controller->vars['app_name'] = BrandSetting::get('app_name', 'EasyDonate');
                $controller->vars['app_debug'] = config('app.debug', false);
                $controller->vars['app_description'] = BrandSetting::get('app_tagline', 'Turn on the Lights');
                $controller->vars['vk_link'] = BrandSetting::get('vk_link', false);
                $controller->vars['discord_link'] = BrandSetting::get('discord_link', false);
                $controller->vars['youtube_link'] = BrandSetting::get('youtube_link', false);
            });
        });
    }
}
