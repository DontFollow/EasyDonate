<?php

Route::prefix('api')->group(function () {

    Route::any('connection', function () {
        return Response::json([
            'status' => true
        ]);
    });

    Route::any('get/plugins', function () {
        $pluginManager = System\Classes\PluginManager::instance();
        $pluginDetails = $pluginManager->getRegistrationMethodValues('pluginDetails');
        foreach ($pluginDetails as $plugin => $details) {

            $details['description'] = e(Lang::get($details['description']));
        }

        return $pluginDetails;
    });

    Route::any('get/themes', function () {
        $themes = [];
        $paths = Storage::disk('base')->directories('themes');
        foreach ($paths as $path) {
            $configPath = base_path("{$path}/theme.yaml");
            if (!file_exists($configPath)) {
                continue;
            }

            $config = Yaml::parseFile($configPath);
            $themes[$config['code']] = $config;

            $previewImagePath = base_path("{$path}/assets/images/theme-preview.png");
            if (file_exists($previewImagePath)) {
                $themes[$config['code']]['preview'] = url("/themes/{$config['code']}/assets/images/theme-preview.png");
            }
        }
        return $themes;
    });

    Route::any('license', function () {
        $credentials = config('credentials', false);
        return Response::json([
            'status' => is_array($credentials) && isset($credentials['username']) && isset($credentials['password']) && isset($credentials['key']),
            'credentials' => $credentials
        ]);
    });

    Route::prefix('install')->group(function () {

        Route::any('plugin', 'DontFollow\EasyDonate\Classes\Install@plugin');

    });

});
