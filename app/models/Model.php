<?php
require_once('database.php');
class Model extends DBConnection
{
    protected $pdo;
    public function __construct()
    {
        $this->pdo = $this->connect();
    }
}