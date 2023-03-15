<?php
class Config
{
    private static $settings = array();

    public static function set($name, $value)
    {
        self::$settings[$name] = $value;
    }

    public static function get($name)
    {
        return isset(self::$settings[$name]) ? self::$settings[$name] : null;
    }
}

// uso
Config::set('timezone', 'Europe/London');
echo Config::get('timezone'); // Output: Europe/London
