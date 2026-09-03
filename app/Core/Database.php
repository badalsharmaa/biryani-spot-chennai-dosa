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
                    $originalDbPath = $connConfig["database"] ?? (dirname(__DIR__, 2) . "/database/app.sqlite");
                    $targetPath = $originalDbPath;

                    // Support read-only serverless filesystem on Vercel / AWS Lambda
                    if (getenv("VERCEL") || getenv("AWS_LAMBDA_FUNCTION_NAME") || (!empty($originalDbPath) && !is_writable(dirname($originalDbPath)))) {
                        $tmpDb = "/tmp/app.sqlite";
                        if (!file_exists($tmpDb) && file_exists($originalDbPath)) {
                            @copy($originalDbPath, $tmpDb);
                        }
                        if (file_exists($tmpDb)) {
                            $targetPath = $tmpDb;
                        }
                    }

                    self::$instance = new PDO("sqlite:{$targetPath}");
                    self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                } else {
                    $dsn = "mysql:host={$connConfig['host']};port={$connConfig['port']};dbname={$connConfig['database']};charset={$connConfig['charset']}";
                    self::$instance = new PDO($dsn, $connConfig["username"], $connConfig["password"], $connConfig["options"] ?? []);
                }
            } catch (\Throwable $e) {
                // Fallback to in-memory SQLite if file cannot be opened
                self::$instance = new PDO("sqlite::memory:");
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        }

        return self::$instance;
    }
}
