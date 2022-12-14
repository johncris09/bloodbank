<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit307c5bf6b3462b0d990c1fa653aa5c1c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit307c5bf6b3462b0d990c1fa653aa5c1c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit307c5bf6b3462b0d990c1fa653aa5c1c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit307c5bf6b3462b0d990c1fa653aa5c1c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
