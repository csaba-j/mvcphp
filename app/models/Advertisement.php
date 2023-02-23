<?php
require_once('model.php');
class Advertisement extends Model
{

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