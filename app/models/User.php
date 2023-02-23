<?php
require_once('model.php');
class User extends Model
{

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
     * Fetches the name of a single user based on its ID.
     * @param int $id
     * @return string The name of the user
     */
    public function getNameById($id)
    {
            $stmt = $this->pdo->prepare("SELECT name FROM users WHERE id=?");
            $stmt->execute([$id]);
            return $stmt->fetchColumn();
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