<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd50123fd49bf68fa58574991b836108
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Leto\\MiniProgramAES\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Leto\\MiniProgramAES\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd50123fd49bf68fa58574991b836108::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd50123fd49bf68fa58574991b836108::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
