<?php namespace DontFollow\EasyDonate\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use DontFollow\Servers\Models\Server;

class Servers extends ReportWidgetBase
{
    public function defineProperties()
    {
        return [
            'title' => [
                'title'   => 'Информация о серверах',
                'default' => 'Информация о серверах'
            ]
        ];
    }

    public function render()
    {
        $servers = Server::all();
        if (!$servers) {
            return false;
        }

        $servers = $servers->toArray();

        return $this->makePartial('servers', [
            'servers' => $servers
        ]);
    }
}
