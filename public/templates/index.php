<?php
require_once '../../models/Model.php';
require_once '../../database/db_connect.php';
    

function fetchThree($dbc) {

    $query=
        'SELECT * FROM 
        (SELECT * FROM ads ORDER BY id DESC LIMIT 0 , 3) AS descended
        ORDER BY id ASC;';
    $carouselItems = [];
    $carouselItems['array']=$dbc->query($query)->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($carouselItems);
    return $carouselItems;
}

extract(fetchThree($dbc));
?>


<!DOCTYPE html>
<html>
<head>
    <title>Adlister Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- make sure this path is changed after the index is moved out of templates -->
    <link rel="stylesheet" type="text/css" href="../css/main.css">

</head>
<body>
<?php require_once "../../views/partials/navbar.php" ?>
<div id="main_container">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php foreach ($array as $ad) {
                if ($ad == $array[0]) { ?>
                    <div class="item active">
                        <?php } else { ?>
                            <div class="item"><?php } ?>
                                <img src="../<?= $ad['image_url'] ?>" alt="<?= $ad['name'] ?>">
                                    <div class="carousel-caption">
                                        <p class='carousel-title'><?= $ad['name'] ?></p>
                                    </div>
                            </div>
                            <?php }; ?> <!-- end foreach -->
                    </div>
        </div>  
      <!-- Controls -->
        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div id="footer-container">
    <?php require_once "../footer.php" ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>