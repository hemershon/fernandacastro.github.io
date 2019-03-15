<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit811f103ccaef425fff9570aff7219169
{
    public static $files = array (
        '3f8bdd3b35094c73a26f0106e3c0f8b2' => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/SendGrid.php',
        '9dda55337a76a24e949fbcc5d905a2c7' => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/helpers/mail/Mail.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SendGrid\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SendGrid\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/php-http-client/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit811f103ccaef425fff9570aff7219169::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit811f103ccaef425fff9570aff7219169::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
