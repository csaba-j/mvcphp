<link rel="stylesheet" href="/mvcphp/public/main.css" type="text/css">

<html>
    <body>
        <div class="navbar">
            <a href="/mvcphp/public/home"><button class="button">Home</button></a>
            <a href="/mvcphp/public/advertisements"><button class="button">Advertisements</button></a>
        </div>
        <h1 id="title">Users in database:</h1>

        <div class="flex-center">
                <?php foreach ($data['users'] as $user) { ?>
                    <div class="element">
                        <h2><?= $user->name ?></h2>
                    </div>
                <?php } ?>

        </div>
                </body>
</html>
