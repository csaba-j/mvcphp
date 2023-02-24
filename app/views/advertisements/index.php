<link rel="stylesheet" href="/mvcphp/public/main.css" type="text/css">


<html>
    <body>
        <div class="navbar">
            <div>
                <a href="/mvcphp/public/users"><button class="button">Users</button></a>
                <a href="/mvcphp/public/advertisements"><button class="button">Advertisements</button></a>
            </div>                        
            <a href="/mvcphp/public/home"><button class="home-button button">Home</button></a>
        </div>
        <div id="title">
                <h1>Advertisements in database:</h1>
        </div>
        <div class="flex-left">
            <?php foreach ($data['advertisementsWithName'] as $advertisementWithName) { ?>
            <div class="element">
                    <h3>Advertiser: <?=$advertisementWithName['username']?></h3>
                    <h2><?= $advertisementWithName['advertisement']->title ?></h2>
            </div>
                <?php } ?>
        </div>
</body>
</html>