<?php

// namespace SamtechSkripsi\App;

class Router
{
    private static array $routes = [];

    public static function add(String $method, String $path, String $controller, String $function)
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller'=>$controller,
            'function'=>$function

        ];
    }

    public static function run()
    {
    }
}
