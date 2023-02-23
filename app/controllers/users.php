<?php
class Users extends Controller
{
    public function index()
    {
        include_once('../app/database.php');
        $users = [];
        $sql = "SELECT * FROM users";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        foreach($stmt->fetchAll() as $row) {
            $user = $this->model('User');
            $user->name = $row['name'];
            $user->id = $row['id'];
            array_push($users, $user);
        }

        $this->view('users/index', ['users'=>$users]);
    }

    public function store($name)
    {
        if(isset($name)){
            include_once('../app/database.php');
            $sql = "INSERT INTO users (name) VALUES (?)";
            $conn->prepare($sql)->execute([$name]);
        }
    }
}
?>