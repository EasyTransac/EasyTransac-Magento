<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf290913db7217117819bfb71504ad8d2
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EasyTransac\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EasyTransac\\' => 
        array (
            0 => __DIR__ . '/..' . '/easytransac/easytransac-sdk-php/sdk/EasyTransac',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf290913db7217117819bfb71504ad8d2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf290913db7217117819bfb71504ad8d2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
