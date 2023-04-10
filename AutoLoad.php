<?php

class AutoLoad
{
    private static $_instance = null;

    private function __construct()
    {
        spl_autoload_register([$this, 'load']);
    }

    public static function _instance()
    {
        if (!self::$_instance) {
            self::$_instance = new AutoLoad();
        }
        return self::$_instance;
    }

    public function load($class)
    {
//        echo '<pre>';
//        var_dump($class);
//        echo '</pre>';
        if (is_readable(trailingslashit(OOP_PLUGIN_DIR . 'class') . $class . '.php') || is_readable(trailingslashit(OOP_PLUGIN_DIR . 'BaseClass') . $class . '.php')) {
            if (file_exists(trailingslashit(OOP_PLUGIN_DIR . 'class') . $class . '.php')) {
                include_once trailingslashit(OOP_PLUGIN_DIR . 'class') . $class . '.php';
            } elseif (trailingslashit(OOP_PLUGIN_DIR . 'BaseClass') . $class . '.php'){
                include_once trailingslashit(OOP_PLUGIN_DIR . 'BaseClass') . $class . '.php';
            }
        }
        return;
    }
}

AutoLoad::_instance();