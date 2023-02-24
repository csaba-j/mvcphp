<a href="/mvcphp/public/home"><button>Home</button></a>

<h1>Advertisements in database:</h1>
<br>
<?php foreach ($data['advertisements'] as $advertisement) { ?>
<?php
        require_once('../app/models/User.php');
        $username = User::getNameById($advertisement['userid']);
?>

<h2><?= $advertisement['title'] ?> (Hirdető:<?=$username?>)</h2>

<?php } ?>