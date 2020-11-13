<?php namespace DontFollow\EasyDonate\Classes;

use Input;
use Artisan;
use Response;
use Exception;
use ZipArchive;

class Install
{
    protected $credentials;

    public function __construct()
    {
        $this->credentials = http_build_query(config('credentials', []));
    }

    public function plugin()
    {
        $hash = Input::get('hash', false);
        if (!$hash) {
            return Response::json([
                'status' => false,
                'message' => 'Не удалось получить хэш-сумму файла.'
            ]);
        }

        if (!file_exists(temp_path('plugins'))) {
            mkdir(temp_path('plugins'), 0777);
        }

        $installPath = temp_path("plugins/{$hash}.zip");
        try {
            file_put_contents($installPath, file_get_contents(implode('?', ["http://easydonate.ru/api/v2/install/plugin/{$hash}", $this->credentials])));
        } catch (Exception $e) {
            return Response::json([
                'status' => false,
                'message' => 'Не удалось скачать файл: ' . $e->getMessage()
            ]);
        }

        $zip = new ZipArchive;
        if ($zip->open($installPath) !== true) {
            return Response::json([
                'status' => false,
                'message' => 'Не удалось открыть установленный архив с плагином.'
            ]);
        }

        $zip->extractTo(plugins_path());
        $zip->close();

        if (file_exists($installPath)) {
            unlink($installPath);
        }

        Artisan::call('easy:up');
        
        return Response::json([
            'status' => true,
            'message' => 'Плагин успешно установлен.'
        ]);
    }
}
