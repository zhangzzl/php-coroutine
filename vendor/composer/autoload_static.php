<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcde6d0f0828bb2418f4bf6b944412fa6
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Coroutine\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Coroutine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcde6d0f0828bb2418f4bf6b944412fa6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcde6d0f0828bb2418f4bf6b944412fa6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
