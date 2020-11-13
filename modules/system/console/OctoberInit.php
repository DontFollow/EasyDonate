<?php namespace System\Console;

use DB;
use PDO;
use Hash;
use Schema;
use PDOException;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Axdlee\Config\Rewrite;

/**
 * Console command to tear down the database.
 *
 * This destroys all database tables that are registered for October and all plugins.
 *
 * @package october\system
 * @author Alexey Bobkov, Samuel Georges
 */
class OctoberInit extends Command
{
    /**
     * The console command name.
     */
    protected $name = 'easy:init';

    /**
     * The console command description.
     */
    protected $description = 'Initialization EasyDonate.';

    protected $rewrite;

    public function __construct()
    {
        parent::__construct();

        $this->rewrite = new Rewrite;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $license = config('dontfollow.easydonate::license', false);
        if (!$license || !(isset($license['username']) && isset($license['password']) && $this->checkLicense($license['username'], $license['password']))) {
            if (!$this->processLicense()) {
                return $this->error('Ошибка установки.');
            }
        }

        if (!$this->processDatabase()) {
            return $this->error('Ошибка установки.');
        }

        if (!$this->processAdmin(config('dontfollow.easydonate::license', false))) {
            $this->error('Не удалось создать администратора.');
        }

        return $this->info('Настройка успешно завершена. Спасибо за использование EasyDonate! © SPACESTUDIO, 2020');
    }

    protected function processLicense()
    {
        $this->info('Настройка лицензии.');
        $this->info('Установка лицензионных данных.');
        $username = $this->ask('Имя пользователя');
        $password = $this->secret('Пароль пользователя');

        $this->info('Проверка лицензии...');
        if (!$this->checkLicense($username, $password)) {
            return false;
        }

        if (!$this->rewriteLicense($username, $password)) {
            return false;
        }

        return true;
    }

    protected function processDatabase()
    {
        $this->info('Настройка базы данных.');
        $host = $this->ask('Хост базы данных', '127.0.0.1');
        $port = $this->ask('Порт базы данных', 3306);
        $database = $this->ask('Имя базы данных', 'easydonate');
        $username = $this->ask('Имя пользователя базы данных', 'root');
        $password = $this->secret('Пароль базы данных');

        try {
            $connection = new PDO("mysql:host={$host};port={$port};dbname={$database}", $username, $password);
        } catch (PDOException $e) {
            $this->error('Не удалось подключиться к базе данных. Проверьте правильность ввода данных и повторите попытку снова...');
            return false;
        }

        if ($this->rewriteDatabase($host, $port, $database, $username, $password)) {
            $this->call('easy:up');
            return true;
        }

        return false;
    }

    protected function processAdmin($license, $backendUsersTable = 'backend_users')
    {
        $this->info('Процесс создания администратора.');
        if (!$license || !(isset($license['username']) && isset($license['password']))) {
            return false;
        }

        if (!Schema::hasTable($backendUsersTable)) {
            return false;
        }

        $backendUser = DB::table($backendUsersTable)->whereLogin('admin');
        if (!$backendUser->exists()) {
            return false;
        }

        return $backendUser->update([
            'login' => $license['username'],
            'password' => Hash::make($license['password'])
        ]);
    }

    protected function checkLicense($username, $password, $uri = 'http://easydonate.ru/api/license/check')
    {
        $response = (new Client(['http_errors' => false]))->post($uri, getOptions($username, $password));

        if ($response->getStatusCode() === 200) {
            $license = @json_decode($response->getBody()->getContents());

            return $license->status;
        }

        return false;
    }

    protected function rewriteDatabase($host, $port, $database, $username, $password)
    {
        if (file_exists(config_path('database.php'))) {
            return $this->rewrite->toFile(config_path('database.php'), [
                'connections.mysql' => [
                    'driver'    => 'mysql',
                    'host'      => $host,
                    'port'      => (int)$port,
                    'database'  => $database,
                    'username'  => $username,
                    'password'  => $password,
                    'charset'   => 'utf8mb4',
                    'collation' => 'utf8mb4_unicode_ci',
                    'prefix'    => '',
                ]
            ]);
        }

        return false;
    }

    protected function rewriteLicense($username, $password)
    {
        $file = plugins_path('dontfollow/easydonate/config/license.php');
        if (!file_exists($file)) {
            file_put_contents(
                $file,
"<?php

return [
    'username' => '',
    'password' => ''
];"
            );
        }

        return $this->rewrite->toFile($file, [
            'username' => $username,
            'password' => $password
        ]);
    }
}
