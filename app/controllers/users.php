<?php
class Users extends Controller
{
    public function index($username = '')
    {
        $user = $this->model('User');
        $user->username = $username != '' ? $username : 'Not given!';
        $this->view('user/index', ['username' => $user->username]);
    }
}
?>