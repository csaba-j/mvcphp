<?php
class User
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Creates a new instance of a User, and sends it to the service to be uploaded to the database.
     * @param string $name The user's name
     * @return void
     */
    public static function create($name)
    {
        UserService::upload(new User($name));
    }

}
?>