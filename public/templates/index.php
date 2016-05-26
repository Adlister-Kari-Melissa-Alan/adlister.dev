<!DOCTYPE html>
<html>
<head>
    <title>Adlister Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <style>
    .item img {
        margin-left: auto;
        margin-right: auto;
        max-height: 450px;
    }

    .carousel-caption {
        color: black;
        bottom: -80px;
        text-shadow: none;
    }

    .carousel-title {

    }

    .carousel-inner {
        overflow: visible;
    }

    </style>

</head>
<body>
    <div id="carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>

  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="motorcycle_placeholder.jpg" alt="motorcycle">
            <div class="carousel-caption">
                <p class='carousel-title'>Lorem ipsum</p>
            </div>
        </div>
        <div class="item">
            <img src="door_placeholder.jpg" alt="door">
            <div class="carousel-caption">
                <p class='carousel-title'>Lorem ipsum 2</p>
            </div>
        </div>

        <div class="item">
            <img src="mustang_placeholder.jpg" alt="mustang">
            <div class="carousel-caption">
                <p class='carousel-title'>Lorem ipsum 3</p>
            </div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>