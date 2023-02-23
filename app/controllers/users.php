<?php
class Users extends Controller
{
    public function index()
    {
        echo 'user index page';
        $this->view('user/index');
    }
}
?>