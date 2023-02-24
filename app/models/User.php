<?php
require_once('database.php');
class User extends DBConnection
{

    /**
     * Fetches all users from the database.
     * @return array A 2D array of the users fetched
     * 
     * Indexing: eg. $user[0]['name']
     */
    public static function getAll()
    {
        $stmt = parent::connect()->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * Fetches the name of a single user based on its ID.
     * @param int $id
     * @return string The name of the user
     */
    public static function getNameById($id)
    {
            $stmt = parent::connect()->prepare("SELECT name FROM users WHERE id=?");
            $stmt->execute([$id]);
            return $stmt->fetchColumn();
    }
    /**
     * Stores an user in the database.
     * @param string $name The user's name to be stored
     * @return void
     */
    public static function upload($name)
    {
        if (isset($name)) {
            $sql = "INSERT INTO users (name) VALUES (?)";
            parent::connect()->prepare($sql)->execute([$name]);
        }
    }

}
?>