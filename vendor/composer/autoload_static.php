<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d4506c3f77f3e7aec8a380bfc1c8cd6
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'P' => 
        array (
            'ParagonIE\\ConstantTime\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'ParagonIE\\ConstantTime\\' => 
        array (
            0 => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'd' => 
        array (
            'danog\\PHP\\' => 
            array (
                0 => __DIR__ . '/..' . '/danog/phpstruct/lib',
            ),
            'danog\\MadelineProto\\' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d4506c3f77f3e7aec8a380bfc1c8cd6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d4506c3f77f3e7aec8a380bfc1c8cd6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5d4506c3f77f3e7aec8a380bfc1c8cd6::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
