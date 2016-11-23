<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit22330c81544777b66b4f58681476d78f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mailgun\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/mailgun/mailgun-php/tests',
            ),
            'Mailgun' => 
            array (
                0 => __DIR__ . '/..' . '/mailgun/mailgun-php/src',
            ),
        ),
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit22330c81544777b66b4f58681476d78f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit22330c81544777b66b4f58681476d78f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit22330c81544777b66b4f58681476d78f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}