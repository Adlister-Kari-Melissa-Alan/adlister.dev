<?php
// require_once '../models/Model.php';
require_once '../database/db_connect.php';
    

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
<h1>KAM LISTINGS</h1>
<p>Start by browsing our <a href="/ads/index">items</a>. If you'd like to post an ad, <a href="/users/signup">sign up</a> for free. Check out the newest items posted below:</p>
<div id="mainContainer">
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
                                <a href="/ads/show?id=<?= $ad['id'] ?>"><img src="../<?= $ad['image_url'] ?>" alt="<?= $ad['name'] ?>"></a>
                                    <div class="carousel-caption">
                                        <p class='carousel-title'><a href="/ads/show?id=<?= $ad['id'] ?>"><?= $ad['name'] ?></a></p>
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