<?php
require_once('../app/models/database.php');
require_once('../app/models/Advertisement.php');
class AdvertisementService extends DBConnection 
{
    /**
     * Fetches all advertisements from the database.
     * @return Advertisement[] An array of the advertisements fetched
     * 
     */
    public static function getAll()
    {
        $advertisements = [];
        $stmt = parent::connect()->prepare("SELECT * FROM advertisements");
        $stmt->execute();
        foreach($stmt->fetchAll() as $advertisement) {
            array_push($advertisements, new Advertisement($advertisement['userid'],$advertisement['title']));
        }
        return $advertisements;
    }

    /**
     * Uploads an advertisement to the database.
     * @param Advertisement $advertisement
     * @return void
     */
    public static function upload($advertisement)
    {
        if (isset($advertisement)){
            $sql = "INSERT INTO advertisements (userid, title) VALUES (?,?)";
            parent::connect()->prepare($sql)->execute([$advertisement->userid, $advertisement->title]);
        }
    }
}

?>