<?php

namespace App\Helpers;

use App\Core\App;

class Asset
{
    public static function url(string $path): string
    {
        $cleanPath = "/" . ltrim($path, "/");
        $fullPath = dirname(__DIR__, 2) . "/public" . $cleanPath;
        
        if (file_exists($fullPath)) {
            $version = filemtime($fullPath);
            return $cleanPath . "?v=" . $version;
        }
        
        return $cleanPath;
    }
}
