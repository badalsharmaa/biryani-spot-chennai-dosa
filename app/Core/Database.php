<?php

namespace App\Core;

use PDO;
use PDOException;

class Database
{
    private static ?PDO $instance = null;

    public static function getConnection(): PDO
    {
        if (self::$instance === null) {
            $config = App::config("database");
            $default = $config["default"] ?? "sqlite";
            $connConfig = $config["connections"][$default] ?? [];

            try {
                if ($default === "sqlite") {
                    $dbPath = $connConfig["database"];
                    $dir = dirname($dbPath);
                    if (!is_dir($dir)) {
                        mkdir($dir, 0755, true);
                    }
                    self::$instance = new PDO("sqlite:{$dbPath}");
                    self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                } else {
                    $dsn = "mysql:host={$connConfig['host']};port={$connConfig['port']};dbname={$connConfig['database']};charset={$connConfig['charset']}";
                    self::$instance = new PDO($dsn, $connConfig["username"], $connConfig["password"], $connConfig["options"] ?? []);
                }
            } catch (PDOException $e) {
                // Fallback to in-memory sqlite if configured db fails
                self::$instance = new PDO("sqlite::memory:");
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        }

        return self::$instance;
    }
}
