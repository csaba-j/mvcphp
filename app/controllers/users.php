<?php
class Users extends Controller
{
    public function index($username = '')
    {
        $this->view('user/index');
    }
}
?>