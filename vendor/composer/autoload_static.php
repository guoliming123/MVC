<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e3bec34c4b639b97fd96a2ba9b5f550
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e3bec34c4b639b97fd96a2ba9b5f550::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e3bec34c4b639b97fd96a2ba9b5f550::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
