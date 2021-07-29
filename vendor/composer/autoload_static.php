<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66041c6a363933c2a63f3392e8259145
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Starship\\Log\\' => 13,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Starship\\Log\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit66041c6a363933c2a63f3392e8259145::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit66041c6a363933c2a63f3392e8259145::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit66041c6a363933c2a63f3392e8259145::$classMap;

        }, null, ClassLoader::class);
    }
}