<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ce92ab5bfd7bf7d92bd77e7d659c059
{
    public static $classMap = array (
        'Opauth' => __DIR__ . '/..' . '/opauth/opauth/lib/Opauth/Opauth.php',
        'OpauthStrategy' => __DIR__ . '/..' . '/opauth/opauth/lib/Opauth/OpauthStrategy.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit0ce92ab5bfd7bf7d92bd77e7d659c059::$classMap;

        }, null, ClassLoader::class);
    }
}