<?php namespace DontFollow\Servers\Classes;

use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;
use DontFollow\Servers\Models\Server;
use DontFollow\Servers\Models\Settings;

class Query
{
    public static function get(Server $server)
    {
        try {
            $query = new MinecraftQuery;
            $query->Connect($server->ip, $server->port, Settings::get('query.timeout', 1));
            $info = $query->GetInfo();
            $info['ListPlayers'] = $query->GetPlayers();
        } catch (MinecraftQueryException $exception) {
            $info = false;
        }

        return $info;
    }
}
