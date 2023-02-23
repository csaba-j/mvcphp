<a href="/mvcphp/public/home"><button>Home</button></a>

<h1>Users in database:</h1>
<br>
<?php foreach ($data['users'] as $user) { ?>
<h2><?= $user['name'] ?></h2>
<?php } ?>