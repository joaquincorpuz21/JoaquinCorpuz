<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit570843de86b5531d3a887cc667e7f2d4
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit570843de86b5531d3a887cc667e7f2d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit570843de86b5531d3a887cc667e7f2d4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit570843de86b5531d3a887cc667e7f2d4::$classMap;

        }, null, ClassLoader::class);
    }
}
