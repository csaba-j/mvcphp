<?php
class Users extends Controller
{
    public function __construct()
    {
        $this->model('User');
    }

    /**
     * Displays the associated index page.
     * @return void
     */
    public function index()
    {
        $this->view('users/index', ['users'=>$this->model->getAll()]);
    }

    public function store($name = '')
    {
            $this->model->upload($name);
    }
}
?>