<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8cf9940936d4debad0717d11266d0fa8
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'UzzairPhpStudio\\EncryptableField\\' => 33,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'UzzairPhpStudio\\EncryptableField\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8cf9940936d4debad0717d11266d0fa8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8cf9940936d4debad0717d11266d0fa8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8cf9940936d4debad0717d11266d0fa8::$classMap;

        }, null, ClassLoader::class);
    }
}