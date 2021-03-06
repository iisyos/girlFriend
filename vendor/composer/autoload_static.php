<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit96cd66a8181d70aff02afc47997dfff0
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Okamotokosuke\\ComposerProject\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Okamotokosuke\\ComposerProject\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit96cd66a8181d70aff02afc47997dfff0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit96cd66a8181d70aff02afc47997dfff0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit96cd66a8181d70aff02afc47997dfff0::$classMap;

        }, null, ClassLoader::class);
    }
}
