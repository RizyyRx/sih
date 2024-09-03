<?php
class Database
{
    public static $conn = NULL;

    // Gets Database connection using DB credentials
    public static function getConnection()
    {
        try {
            if (Database::$conn == NULL) {
                // DB credentials
                $servername = 'mysql.selfmade.ninja';
                $username = 'rizyy';
                $password = 'thisislife@69';
                $dbname = 'rizyy_sih';

                // Create new mysqli connection
                $connection = new mysqli($servername, $username, $password, $dbname);

                // Check for connection errors
                if ($connection->connect_error) {
                    throw new Exception("Connection failed: " . $connection->connect_error);
                } else {
                    Database::$conn = $connection;
                    // Return the connection
                    return Database::$conn;
                }
            } else {
                // Return existing connection
                return Database::$conn;
            }
        } catch (Exception $e) {
            // Handle exception
            die("Connection failed: " . $e->getMessage());
        }
    }
}
