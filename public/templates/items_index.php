<?php
require_once __DIR__ . '/../../models/Ads.php';
require_once __DIR__ . '/../../models/User.php';
require_once '../../database/db_connect.php';
$data = [];
$stmt = $dbc->query("SELECT * FROM ads");
$data['ad'] = $stmt->fetchALL(PDO::FETCH_ASSOC);

$dataUser = [];
$stmt2 = $dbc->query("SELECT * FROM users");
$data['user'] = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adlister-Items Listings</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <style type="text/css">
    body {
      text-align: center;
    }
    .ads_image {
      max-width: 300px;
      max-height: 300px;
    }

    </style>
</head>
<body>

<h1>Items Listings</h1>

<div id="main" class="container">
<?php foreach ($data['ad'] as $ad): ?>
  <div class="col-xs-12 col-md-6 col-lg-6 ads">
    <div class="thumbnail">
      <img class="ads_image" src="../<?= $ad['image_url'] ?>" alt="Chair">
      <div class="caption">
        <h3><?= substr($ad['name'], 0, 25) ?>...</h3>
        <p>$<?= $ad['price'] ?>.00</p>
        <p><a href="#" class="btn btn-default" role="button">View Item</a></p>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>