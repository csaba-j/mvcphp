<?php
class Home extends Controller {

    /**
     * Displays the associated index page.
     * @return void
     */
    public function index()
    {
        $this->view('home/index');
    }
}
?>