<?php
class DBConnection {
    private $servername = "localhost";
    private $dbname = "advertising";
    private $username = "root";
    private $password = "advertisements123123";
    
    /**
     * Initiates a connection to the database.
     * @return PDO|null The PDO object after connection, if successful, else null
     */
    public function connect()
    {
        try {
            $pdo = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
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