<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ce53bbf7f3bea1a1faf8e5500335687
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GraphQL\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GraphQL\\' => 
        array (
            0 => __DIR__ . '/..' . '/webonyx/graphql-php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ce53bbf7f3bea1a1faf8e5500335687::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ce53bbf7f3bea1a1faf8e5500335687::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
