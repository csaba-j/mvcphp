<?php
class Controller
{
    /**
     * Changes the model attribute to the currently required type.
     * @param string $model The type of the model to be used in the specific controller.
     * @return void
     */
    public function model($model)
    {
        require_once('../app/models/' . $model . '.php');
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