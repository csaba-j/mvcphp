<?php
class DBConnection {
    private static $servername = "localhost";
    private static $dbname = "advertising";
    private static $username = "root";
    private static $password = "advertisements123123";
    
    /**
     * Initiates a connection to the database.
     * @return PDO|null The PDO object after connection, if successful, else null
     */
    protected function connect()
    {
        try {
            $pdo = new PDO('mysql:host='.DBConnection::$servername.';dbname='.DBConnection::$dbname, DBConnection::$username, DBConnection::$password);
            // set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
          }
    }

}

?>