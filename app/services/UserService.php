<?php
class UserService extends Service
{
    public function __construct()
    {
        $this->model('User');
    }
    /**
     * Fetches all users from the database.
     * @return User[] An array of the users fetched
     * 
     */
    public static function getAll()
    {
        $users = [];
        $stmt = parent::connect()->prepare("SELECT * FROM users");
        $stmt->execute();
        foreach($stmt->fetchAll() as $user) {
            array_push($users, new User($user['name']));
        }
        return $users;
    }

    /**
     * Fetches the name of a single user based on its ID.
     * @param int $id The user's unique ID
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
     * @param User $name The user's name to be stored
     * @return void
     */
    public static function upload($user)
    {
        if (isset($user)) {
            $sql = "INSERT INTO users (name) VALUES (?)";
            parent::connect()->prepare($sql)->execute([$user->name]);
        }
    }

}
?>