<link rel="stylesheet" href="/mvcphp/public/main.css" type="text/css">


<html>
        <body>
                <div class="navbar">
                        <a href="/mvcphp/public/home"><button class="button">Home</button></a>
                        <a href="/mvcphp/public/users"><button class="button">Users</button></a>
                </div>
                <div id="title">
                        <h1>Advertisements in database:</h1>
                </div>
                <div class="flex-left">
                        <br>
                        <?php foreach ($data['advertisements'] as $advertisement) { ?>
                        <?php
                                require_once('../app/models/User.php');
                                $model = new User();
                                $username = $model->getNameById($advertisement['userid']);
                        ?>
                        <div class="element">
                                <h3>Advertiser: <?=$username?></h3>
                                <h2><?= $advertisement['title'] ?></h2>
                        </div>

                        <?php } ?>
                        </div>
        </body>
</html>