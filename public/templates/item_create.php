<?php
require_once '../../models/Ads.php';
require_once '../../utils/Input.php';
// build query



function adItem() {
    $name = Input::get('name');
    $price = Input::get('price');
    $description = Input::get('description');
    $ad = new Ads;
    $ad->name = $name;
    $ad->description = $description;
    $ad->price = $price;
    $ad->image_url =' ';
    $ad->save();
}

if(Input::has('name') && Input::has('price') && Input::has('description')) {
    adItem();
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Adlister-item create</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <form method="POST">
    <div class="form-group form-group-lg">
      <label for="itemName">Item Name</label>
      <input type="item" class="form-control" id="itemName" placeholder="Item Name">
    </div>
    <div class="form-group">
      <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
      <div class="input-group">
        <div class="input-group-addon">$</div>
        <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
        <div class="input-group-addon">.00</div>
      </div>
    </div>
    <div class="form-group">
        <textarea class="form-control" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
</html>