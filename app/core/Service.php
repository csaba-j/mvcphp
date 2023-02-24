<?php
require_once('../app/models/database.php');
class Service extends DBConnection
{
    /**
     * Uses a model of the given type.
     * @param string $model
     * @return void
     */
    public function model($model)
    {
        require_once('../app/models/' . $model . '.php');
    }
}


?>