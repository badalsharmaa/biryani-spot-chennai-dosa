<?php

namespace App\Core;

class View
{
    protected static string $viewsPath = "";

    public static function setViewsPath(string $path): void
    {
        self::$viewsPath = rtrim($path, "/");
    }

    public static function render(string $template, array $data = []): void
    {
        extract($data, EXTR_SKIP);
        $file = (self::$viewsPath ?: dirname(__DIR__) . "/views") . "/" . ltrim($template, "/") . ".php";

        if (!file_exists($file)) {
            throw new \RuntimeException("View template not found: {$file}");
        }

        require $file;
    }
}
