<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit79ebead14ef012ed44fbef30f25f311b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Statickidz\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Statickidz\\' => 
        array (
            0 => __DIR__ . '/..' . '/statickidz/php-google-translate-free/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit79ebead14ef012ed44fbef30f25f311b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit79ebead14ef012ed44fbef30f25f311b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
