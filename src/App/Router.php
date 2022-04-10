<?php

namespace SamtechSkripsi\App;

class Router
{
    private static array $routes = [];

    public static function add(String $method, String $path, String $controller, String $function)
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function

        ];
    }

    public static function run()
    {
        $path = "/";

        if (isset($_SERVER["PATH_INFO"])) {
            $path = $_SERVER["PATH_INFO"];
        }

        $method = $_SERVER["REQUEST_METHOD"];

        foreach (self::$routes as $route) {
            $pattern="#^".$route['path']."$#";

            if (preg_match($pattern,$path,$variable) && $method == $route['method']) {
                $controller = new $route['controller'];
                $function = $route['function'];

                array_shift($variable);
                call_user_func_array([$controller,$function],$variable);
                return;
            }
        }

        http_response_code(404);
        echo "Halaman Error";
    }
}
