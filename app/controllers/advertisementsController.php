<?php
class Advertisements extends Controller
{
    public function __construct()
    {
        $this->model('Advertisement');
        $this->service('AdvertisementService');
    }
    /**
     * Displays the index page of advertisements, listing all available advertisements
     * @return void
     */
    public function index()
    {
        $this->view('advertisements/index', ['advertisementsWithName'=>AdvertisementService::getAllWithUsernames()]);
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