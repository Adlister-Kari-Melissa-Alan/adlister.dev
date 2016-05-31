<?php
// require_once __DIR__ . '/../models/Ads.php';
// require_once __DIR__ . '/../models/User.php';
// require_once '../../database/db_connect.php';
$data = [];
$stmt = $dbc->query("SELECT * FROM ads");
$data['ad'] = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>

<h1>Items Listings</h1>

<div id="main" class="container">
<?php foreach ($data['ad'] as $ad): ?>
  <div class="col-xs-12 col-md-6 col-lg-6 ads">
    <div class="thumbnail">
      <img class="ads_image" src="../<?= $ad['image_url'] ?>" alt="Item">
      <div class="caption">
        <h3><?= substr($ad['name'], 0, 25) ?>...</h3>
        <p>$<?= $ad['price'] ?>.00</p>
        <p><a href="/ads/show?id=<?=$ad['id'] ?>" class="btn btn-default" role="button">View Item</a></p>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>