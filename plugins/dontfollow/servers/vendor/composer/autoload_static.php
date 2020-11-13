<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f2c4b963d09366bb71a486c2e1e1b78
{
    public static $prefixLengthsPsr4 = array (
        'x' => 
        array (
            'xPaw\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'xPaw\\' => 
        array (
            0 => __DIR__ . '/..' . '/xpaw/php-minecraft-query/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f2c4b963d09366bb71a486c2e1e1b78::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f2c4b963d09366bb71a486c2e1e1b78::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
