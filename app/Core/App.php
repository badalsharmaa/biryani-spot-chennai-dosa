<?php

namespace App\Core;

class App
{
    private static array $configs = [];
    private static ?Router $router = null;
    private static ?Request $request = null;

    public static function boot(): void
    {
        Autoloader::register();
        self::$request = new Request();
        self::$router = new Router();
        
        View::setViewsPath(dirname(__DIR__) . "/views");
        
        // Execute global security headers
        (new \App\Middleware\SecurityHeaders())->handle(self::$request);
    }

    public static function config(string $key, mixed $default = null): mixed
    {
        $parts = explode(".", $key);
        $file = $parts[0];

        if (!isset(self::$configs[$file])) {
            $path = dirname(__DIR__, 2) . "/config/{$file}.php";
            if (file_exists($path)) {
                self::$configs[$file] = require $path;
            } else {
                self::$configs[$file] = [];
            }
        }

        $current = self::$configs[$file];
        for ($i = 1; $i < count($parts); $i++) {
            if (!is_array($current) || !isset($current[$parts[$i]])) {
                return $default;
            }
            $current = $current[$parts[$i]];
        }

        return $current;
    }

    public static function router(): Router
    {
        return self::$router;
    }

    public static function request(): Request
    {
        return self::$request;
    }

    public static function run(): void
    {
        self::$router->dispatch(self::$request);
    }
}
