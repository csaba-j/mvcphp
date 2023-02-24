<?php
require_once('../app/services/AdvertisementService.php');
class Advertisements extends Controller
{
    /**
     * Displays the index page of advertisements, listing all available advertisements
     * @return void
     */
    public function index()
    {
        $this->view('advertisements/index', ['advertisements'=>AdvertisementService::getAll()]);
    }

    /**
     * Stores a new advertisement based on user params.
     * @param int $userid
     * @param string $title
     * @return void
     */
    public function store($userid, $title)
    {
        Advertisement::create($userid, $title);
    }
}

?>