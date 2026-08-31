<?php

namespace App\Helpers;

class Validator
{
    public static function email(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function phone(string $phone): bool
    {
        return preg_match("/^[0-9\-\+\(\)\s]{7,20}$/", trim($phone)) === 1;
    }

    public static function sanitize(string $input): string
    {
        return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, "UTF-8");
    }
}
