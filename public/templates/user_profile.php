<?php
require_once '../../models/Model.php';
require_once '../../database/db_connect.php';
require_once '../../utils/Auth.php';

$user=getUser("id");
// var_dump($user);

function getUser($id, $default=null) {
    if (isset($_REQUEST[$id])) {
        return $_REQUEST[$id];
        } else {
            return $default;
        }
}

function getUsersAds($dbc, $user) {
    $query=
        "SELECT ads.id, ads.name, users.name AS user_name, users.email FROM ads JOIN users ON ads.user_id = users.id WHERE users.id={$user};";
    $usersAds = [];
    $usersAds['array']=$dbc->query($query)->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($usersAds);
    return $usersAds;
}

extract(getUsersAds($dbc, $user));

?>

<!DOCTYPE html>
<html>
<head>
    <title>User profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<style>

    .user_profile {
        margin-bottom: 6rem;
    }

    .user_profile_container {
        width: 30rem;
    }

</style>
</head>
<body>
    <div class="container user_profile_container" >
        <div class="user_profile">
            <p class"profile_head">Your info</p>
            <dl class="well">
                <dt>Name</dt>
                <dd> <?= $array[0]['user_name'] ?> </dd>

                <dt>Email</dt>
                <dd> <?= $array[0]['email'] ?> </dd>
            </dl>

            <?php 
                if (Auth::check()) { ?>
                    <a class="btn btn-default" href="#" role="button">Edit Profile</a>
                <?php } ?>
        </div>

        <div class="user_profile">
            <p class"profile_head">Your ads</p>
            <ul class="well list-unstyled">
                
            <?php foreach ($array as $ad) { ?>

            <li><?= substr($ad['name'], 0, 25) ?>...</li>

        <?php }; ?> <!-- end foreach -->
            </ul>
            <?php 
                if (Auth::check()) { ?>
                    <a class="btn btn-default" href="ads/create.php" role="button">Create Ad</a>
                <?php } ?>
        </div>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>