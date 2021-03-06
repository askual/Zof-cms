<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1fe0cf31979b97e0814735e78cee646b
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Defuse\\Crypto\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Defuse\\Crypto\\' => 
        array (
            0 => __DIR__ . '/..' . '/defuse/php-encryption/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1fe0cf31979b97e0814735e78cee646b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1fe0cf31979b97e0814735e78cee646b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
