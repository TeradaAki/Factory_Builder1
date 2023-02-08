<?php

namespace Composer\Autoload;

class ComposerStaticInit044a27d38f9f491266fd63a643a369a0
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Terada\\Factory\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Terada\\Factory\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit044a27d38f9f491266fd63a643a369a0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit044a27d38f9f491266fd63a643a369a0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit044a27d38f9f491266fd63a643a369a0::$classMap;

        }, null, ClassLoader::class);
    }
}
