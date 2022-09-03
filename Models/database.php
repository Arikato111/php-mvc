<?php
class Database
{
    private static function Connect()
    {
        import('dotenv')->config();
        $host = $_ENV['DB_HOST'];
        $username = $_ENV['DB_USERNAME'];
        $password = $_ENV['DB_PASSWORD'];
        $db_name = $_ENV['DB_DATABASE'];

        try {
            $connect = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
        } catch (PDOException $e) {
            echo 'Failed to connect database ' . $e;
        }
        return $connect;
    }
}
