<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite63730deeabe136079ac88158d9d8b8d
{
    public static $files = array (
        '119114a7a0fe1a851a5bbdd53c5fde2d' => __DIR__ . '/../..' . '/src/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite63730deeabe136079ac88158d9d8b8d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite63730deeabe136079ac88158d9d8b8d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}