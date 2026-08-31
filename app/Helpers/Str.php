<?php

namespace App\Helpers;

class Str
{
    public static function slug(string $title, string $separator = "-"): string
    {
        $title = mb_strtolower($title, "UTF-8");
        $title = preg_replace("/[^a-z0-9]+/u", $separator, $title);
        return trim($title, $separator);
    }

    public static function limit(string $value, int $limit = 100, string $end = "..."): string
    {
        if (mb_strwidth($value, "UTF-8") <= $limit) {
            return $value;
        }
        return rtrim(mb_strimwidth($value, 0, $limit, "", "UTF-8")) . $end;
    }
}
