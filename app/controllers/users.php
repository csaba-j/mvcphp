<?php
class Users extends Controller
{
    public function index($name = '')
    {
        $user = $this->model('User');
        $user->name = $name != '' ? $name : 'Not given!';
        $this->view('user/index', ['name' => $user->name]);
    }
}
?>