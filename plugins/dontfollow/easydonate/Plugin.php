<?php namespace DontFollow\EasyDonate;

use Http;
use Backend;
use System\Classes\PluginBase;

/**
 * EasyDonate Plugin Information File
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
            'name'        => 'EasyDonate',
            'description' => 'Сердце EasyDonate.',
            'author'      => 'DontFollow',
            'icon'        => 'icon-rocket'
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
            'DontFollow\EasyDonate\Components\EasyDonate' => 'EasyDonate',
        ];
    }

    public function registerNavigation()
    {
        return [
            'updates' => [
                'label' => 'Обновления',
                'url' => Backend::url('system/updates'),
                'icon' => 'icon-cloud-download',
                'order' => 500,
                'counter' => function () {
                    try {
                        $url = 'http://easydonate.ru/api/v2/updates/check';
                        $credentials = http_build_query(config('credentials', false));
                        if (!$credentials) {
                            return false;
                        }

                        $update = @file_get_contents(implode('?', [$url, $credentials]));
                        if (!$update) {
                            return false;
                        }

                        $update = json_decode($update);
                    } catch (Exception $ex) {
                        return false;
                    }

                    return $update->status;
                }
            ],
            'documentation' => [
                'label'       => 'Документация',
                'url'         => '//docs.easydonate.ru/work/dashboard',
                'icon'        => 'icon-book',
                'order'       => 500
            ],
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'DontFollow\EasyDonate\ReportWidgets\Products' => [
                'label'   => 'Инфорация о товарах',
                'context' => 'dashboard'
            ],
            'DontFollow\EasyDonate\ReportWidgets\Servers' => [
                'label'   => 'Информация о серверах',
                'context' => 'dashboard'
            ]
        ];
    }
}
