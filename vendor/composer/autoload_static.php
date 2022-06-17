<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e6a4251906326660f1226aec2980328
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Models',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\Http\\Controllers\\Admin\\OrdersController' => __DIR__ . '/../..' . '/App/Http/Controllers/Admin/OrdersController.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e6a4251906326660f1226aec2980328::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e6a4251906326660f1226aec2980328::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7e6a4251906326660f1226aec2980328::$classMap;

        }, null, ClassLoader::class);
    }
}
