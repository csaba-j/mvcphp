<a href="/mvcphp/public/home"><button>Home</button></a>

<h1>Advertisements in database:</h1>
<br>
<?php foreach ($data['advertisementsWithName'] as $advertisementWithName) { ?>

<h2><?= $advertisementWithName['advertisement']->title ?> (Advertiser: <?=$advertisementWithName['username']?>)</h2>

<?php } ?>