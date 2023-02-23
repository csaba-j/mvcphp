<?php
require_once('database.php');
class User extends DBConnection
{
    protected $pdo;
    public function __construct()
    {
        $this->pdo = $this->connect();
    }

    /**
     * Fetches all users from the database.
     * @return array A 2D array of the users fetched
     * 
     * Indexing: eg. $user[0]['name']
     */
    public function getAll()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    /**
     * Stores an user in the database.
     * @param string $name The user's name to be stored
     * @return void
     */
    public function upload($name)
    {
        if (isset($name)) {
            $sql = "INSERT INTO users (name) VALUES (?)";
            $this->pdo->prepare($sql)->execute([$name]);
        }
    }

}
?>