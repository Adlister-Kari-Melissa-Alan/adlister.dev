<?php
// require_once '../../utils/Auth.php';

$user=getUser("id");
// var_dump($user);

function getUser($id, $default=null) {
    if (isset($_REQUEST[$id])) {
        return $_REQUEST[$id];
        } else {
            return $default;
        }
}


$infoQuery=
    "SELECT name, email FROM users WHERE id={$user};";
$usersInfo = [];
$usersInfo['array']=$dbc->query($infoQuery)->fetchAll(PDO::FETCH_ASSOC);
// var_dump($usersInfo['array']);


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

<div class="container user_profile_container" >
    <div class="user_profile">
        <p class"profile_head">Your info</p>
        <dl class="well">
            <dt>Name</dt>
            <dd> <?= $usersInfo['array'][0]['name'] ?> </dd>

            <dt>Email</dt>
            <dd> <?= $usersInfo['array'][0]['email'] ?> </dd>
        </dl>

        <?php //if user is not logged in, hide button
            if (Auth::id()==$user) { ?>
                <a class="btn btn-default" href="/users/edit" role="button">Edit Profile</a>
            <?php } ?>
    </div>

    <div class="user_profile">
        <p class"profile_head">Your ads</p>
        <ul class="well list-unstyled">
            
        <?php foreach ($array as $ad) { ?>

        <li><a href="/ads/show?id=<?= $ad['id'] ?>"><?= substr($ad['name'], 0, 25) ?>...</a></li>

    <?php }; ?> <!-- end foreach -->
        </ul>
        <?php //if user is not logged in, hide button
            if (Auth::id()==$user) { ?>
                <a class="btn btn-default" href="/ads/create" role="button">Create Ad</a>
            <?php } ?>
    </div>
</div>