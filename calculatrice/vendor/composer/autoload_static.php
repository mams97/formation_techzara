<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit947cd9ec09852dbbb3024b27d935f35f
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit947cd9ec09852dbbb3024b27d935f35f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit947cd9ec09852dbbb3024b27d935f35f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit947cd9ec09852dbbb3024b27d935f35f::$classMap;

        }, null, ClassLoader::class);
    }
}
