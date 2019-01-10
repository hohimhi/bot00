<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9981c65233b2fa6deb129d3a651f7828
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9981c65233b2fa6deb129d3a651f7828::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9981c65233b2fa6deb129d3a651f7828::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
