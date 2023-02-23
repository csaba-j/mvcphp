<?php
require_once('database.php');
class Advertisement extends DBConnection
{
    protected $pdo;
    public function __construct()
    {
        $this->pdo = $this->connect();
    }
    
    /**
     * Fetches all advertisements from the database.
     * @return array A 2D array of the advertisements fetched
     * 
     * Indexing: eg. $advertisements[0]['name']
     */
    public function getAll()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM advertisements");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * Stores an advertisement in the database.
     * @param int $userid The advertising user's ID
     * @param string $title The title of the advertisement
     * @return void
     */
    public function upload($userid = '', $title = '')
    {
        if (isset($userid) && isset($title)){
            $sql = "INSERT INTO advertisements (userid, title) VALUES (?,?)";
            $this->pdo->prepare($sql)->execute([$userid, $title]);
        }
    }
}
?>