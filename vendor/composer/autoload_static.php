<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite9ce2ca9390842ecc9236d5a681fca1f
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'enshrined\\svgSanitize\\' => 22,
        ),
        'S' => 
        array (
            'SVG\\' => 4,
        ),
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'enshrined\\svgSanitize\\' => 
        array (
            0 => __DIR__ . '/..' . '/enshrined/svg-sanitize/src',
        ),
        'SVG\\' => 
        array (
            0 => __DIR__ . '/..' . '/meyfa/php-svg/src',
        ),
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite9ce2ca9390842ecc9236d5a681fca1f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite9ce2ca9390842ecc9236d5a681fca1f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
