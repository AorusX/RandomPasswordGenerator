<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite560b6102d926156adcd8aadfc6c6919
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SJay\\RandomPasswordGenerator\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SJay\\RandomPasswordGenerator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite560b6102d926156adcd8aadfc6c6919::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite560b6102d926156adcd8aadfc6c6919::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite560b6102d926156adcd8aadfc6c6919::$classMap;

        }, null, ClassLoader::class);
    }
}
