<?php
class Users extends Controller
{
    public function index($username = '')
    {
        $user = $this->model('User');
        $user->username = $username;
        echo 'user index page ' . $user->username;
    }
}
?>