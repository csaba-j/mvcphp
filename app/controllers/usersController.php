<?php
class Users extends Controller
{
    public function __construct()
    {
        $this->model('User');
        $this->service('UserService');
    }

    /**
     * Displays the associated index page.
     * @return void
     */
    public function index()
    {
        $this->view('users/index', ['users'=>UserService::getAll()]);
    }

    /**
     * Stores a new user based on user params.
     * @param string $name
     * @return void
     */
    public function store($name = '')
    {
            User::create($name);
    }
}
?>