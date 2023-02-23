<?php
class Controller
{
    public function index() 
    {
        echo ('index!');
    }

    public function model($model)
    {
        require_once('../app/models/' . $model . '.php');
        return new $model();
    }

}
?>