<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite61e6237abc382b870b5689d8bd710cf
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Google_Web_Stories_Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Google_Web_Stories_Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInite61e6237abc382b870b5689d8bd710cf', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Google_Web_Stories_Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite61e6237abc382b870b5689d8bd710cf', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Google_Web_Stories_Composer\Autoload\ComposerStaticInite61e6237abc382b870b5689d8bd710cf::getInitializer($loader));

        $loader->setClassMapAuthoritative(true);
        $loader->register(true);

        return $loader;
    }
}
