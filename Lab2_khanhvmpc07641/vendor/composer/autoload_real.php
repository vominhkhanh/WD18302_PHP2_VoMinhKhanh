<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit9f5c53c380bac86748d507efdeaaf24a
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

        spl_autoload_register(array('ComposerAutoloaderInit9f5c53c380bac86748d507efdeaaf24a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit9f5c53c380bac86748d507efdeaaf24a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit9f5c53c380bac86748d507efdeaaf24a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
