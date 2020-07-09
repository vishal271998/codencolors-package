<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit393a1f7752e827c01349c7f931bed508
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'ImageUpload\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ImageUpload\\' => 
        array (
            0 => __DIR__ . '/../..' . '/codencolors/ImageUpload',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit393a1f7752e827c01349c7f931bed508::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit393a1f7752e827c01349c7f931bed508::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}