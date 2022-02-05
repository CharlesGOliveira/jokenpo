<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit89ef33cc6630b9b942fb0927206430f1
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gesture\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gesture\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit89ef33cc6630b9b942fb0927206430f1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit89ef33cc6630b9b942fb0927206430f1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit89ef33cc6630b9b942fb0927206430f1::$classMap;

        }, null, ClassLoader::class);
    }
}
