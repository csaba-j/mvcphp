<?php
class Advertisements extends Controller
{
    public function __construct()
    {
        $this->model('Advertisement');
    }
    public function index()
    {
        $this->view('advertisements/index', ['advertisements'=>$this->model->getAll()]);
    }

    public function store($userid, $title)
    {
        $this->model->upload($userid, $title);
    }
}

?>