<?php
class Advertisement
{
    public $userid;
    public $title;

    public function __construct($userid, $title)
    {
        $this->userid = $userid;
        $this->title = $title;
    }

    /**
     * Creates a new instance of an Advertisements, and sends it to the service to be uploaded to the database.
     * @param int $userid The associated user's ID
     * @param string $title The title of the advertisement
     * @return void
     */
    public static function create($userid, $title)
    {
        AdvertisementService::upload(new Advertisement($userid,$title));
    }

}
?>