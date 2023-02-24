<?php
class Controller
{
    /**
     * Uses a model of the required type.
     * 
     * @param string $model The type of the model to be used in the specific controller.
     * @return void
     */
    public function model($model)
    {
        require_once('../app/models/' . $model . '.php');
    }

    /**
     * Uses a service of the required type.
     * 
     * @param string $service The type of the service to be used in the specific controller.
     * @return void
     */
    public function service($service)
    {
        require_once('../app/services/' . $service . '.php');
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