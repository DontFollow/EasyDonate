<?php namespace DontFollow\Servers\Components;

use Event;
use ApplicationException;
use Cms\Classes\ComponentBase;
use DontFollow\Servers\Models\Server;

class Servers extends ComponentBase
{
    public $servers;

    public function componentDetails()
    {
        return [
            'name'        => 'Серверы',
            'description' => 'Серверы для EasyDonate'
        ];
    }

    public function init()
    {
        $this->servers = $this->page['servers'] = Server::all();
        $this->page['server'] = Server::selected();
    }

    public function onRender()
    {
        return $this->renderPartial('servers');
    }

    public function onRenderServer()
    {
        $server_id = post('server_id', false);
        if (!$server_id) {
            throw new ApplicationException('Что-то пошло не так. Пожалуйста, обновите страницу.');
        }

        $server = $this->servers->where('id', $server_id)->first();
        if (!$server) {
            throw new ApplicationException('Сервер не найден.');
        }

        $this->page['server'] = $server;
    }
}
