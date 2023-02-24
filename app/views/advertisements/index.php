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
                        <?php foreach ($data['advertisementsWithName'] as $advertisementWithName) { ?>

                        <div class="element">
                                <h3>Advertiser: <?=$advertisementWithName['username']?></h3>
                                <h2><?= $advertisementWithName['advertisement']->title ?></h2>
                        </div>

                        <?php } ?>
                        </div>
        </body>
</html>