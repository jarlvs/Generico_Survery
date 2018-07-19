<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit99b6ca8dbbf2f1b2e6dfa258ed053706
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'php\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'php\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/php',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit99b6ca8dbbf2f1b2e6dfa258ed053706::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit99b6ca8dbbf2f1b2e6dfa258ed053706::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}