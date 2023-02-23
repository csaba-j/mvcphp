<?php
class Controller
{   
    public function model($model)
    {
        require_once('../app/models/' . $model . '.php');
        return new $model();
    }

    /**
     * Renders the given view on the website.
     * 
     * @param string $view the relative path to the view inside the views folder (eg. 'home/index')
     * @param [] $data an array of optional data to pass to the view
     * @return void
     */
    public function view($view, $data = [])
    {
        require_once('../app/views/' . $view . '.php');
    }



}
?>