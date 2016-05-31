<?php
// session_start();
require_once __DIR__ . '/../bootstrap.php';
require_once '../models/Ads.php';
require_once '../models/Model.php';
require_once '../models/User.php';
require_once '../database/db_connect.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>OooLister</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 
<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<?php require '../views/partials/head.php'; ?>
<body>
    <?php require '../views/partials/navbar.php'; ?>

    <?php require $main_view; ?>

    <?php require '../views/partials/common_js.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>