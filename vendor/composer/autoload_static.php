<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit449dddf2f7bea795674f4e5b54085849
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OneDayToDie\\TicketSystem\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OneDayToDie\\TicketSystem\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit449dddf2f7bea795674f4e5b54085849::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit449dddf2f7bea795674f4e5b54085849::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit449dddf2f7bea795674f4e5b54085849::$classMap;

        }, null, ClassLoader::class);
    }
}