<?php namespace DontFollow\Obsidian\Updates;

use DontFollow\Servers\Models\Server;
use October\Rain\Database\Updates\Seeder;

class SeedServersTable extends Seeder
{
    public function run()
    {
        Server::create([
            'name' => 'Выживание',
            'ip' => 'alcor.mcstudio.pro',
            'port' => 25641,
            'description' => 'Тестовый сервер',
            'rcon_port' => 25573,
            'rcon_password' => 'qwerty123'
        ]);
    }
}
