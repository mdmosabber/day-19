<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15bcda8755c6f257d70dd8d2634f8e22
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit15bcda8755c6f257d70dd8d2634f8e22::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15bcda8755c6f257d70dd8d2634f8e22::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
