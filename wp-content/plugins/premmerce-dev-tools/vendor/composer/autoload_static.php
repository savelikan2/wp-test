<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd5d485f6e34ee1158397f08a4d2ae890
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        '1e7a9f33207dd5ca8dc8a70c0281351c' => __DIR__ . '/../..' . '/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'b' => 
        array (
            'bheller\\ImagesGenerator\\' => 24,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
            'Symfony\\Component\\Stopwatch\\' => 28,
        ),
        'P' => 
        array (
            'Premmerce\\DevTools\\' => 19,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'bheller\\ImagesGenerator\\' => 
        array (
            0 => __DIR__ . '/..' . '/bheller/images-generator/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Symfony\\Component\\Stopwatch\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/stopwatch',
        ),
        'Premmerce\\DevTools\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd5d485f6e34ee1158397f08a4d2ae890::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd5d485f6e34ee1158397f08a4d2ae890::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
