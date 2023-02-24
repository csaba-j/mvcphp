<?php
require_once('database.php');
class Advertisement extends DBConnection
{
    /**
     * Fetches all advertisements from the database.
     * @return array A 2D array of the advertisements fetched
     * 
     * Indexing: eg. $advertisements[0]['name']
     */
    public static function getAll()
    {
        $stmt = parent::connect()->prepare("SELECT * FROM advertisements");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * Stores an advertisement in the database.
     * @param int $userid The advertising user's ID
     * @param string $title The title of the advertisement
     * @return void
     */
    public static function upload($userid = '', $title = '')
    {
        if (isset($userid) && isset($title)){
            $sql = "INSERT INTO advertisements (userid, title) VALUES (?,?)";
            parent::connect()->prepare($sql)->execute([$userid, $title]);
        }
    }
}
?>