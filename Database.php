<?php

class Database
{
    private static ?\PDO $pdo = null;

    public static function getConnection(): \PDO
    {
        $url = "mysql:host=localhost:3306;dbname=dblaundry";
        $username = "root";
        $password = "";
        if (self::$pdo == null) {
            self::$pdo = new \PDO(
                $url,
                $username,
                $password
            );
        }

        return self::$pdo;
    }
}
