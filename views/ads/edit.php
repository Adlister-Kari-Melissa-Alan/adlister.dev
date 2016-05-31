<?php

require_once '../models/Ads.php';
require_once '../utils/Input.php';
require_once '../utils/helper_functions.php';

$ad = Ads::find(Input::get('id'));
var_dump($ad);
  if ($_POST) {
    $ad->name = Input::get('name');
    $ad->description = Input::get('description');
    $ad->price = Input::get('price');
    var_dump($ad);
    if(!isset($ad->img_url)) {
      $ad->image_url = saveUploadedImage('img');
    } 
    $ad->save();
    header("Location: /ads/show?id=$ad->id");
    
  }

?>

<div class="container">
  <form action="/ads/edit" method="post" enctype="multipart/form-data">
  <div class="form-group form-group-lg">
    <label for="itemName">Item Name</label>
    <input type="text" class="form-control" name="name" value="<?= $ad->name ?>" id="itemName" placeholder="Item Name">
  </div>
  <!--PRICE-->
  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="text" class="form-control" name="price" value="<?= $ad->price ?>" id="exampleInputAmount" placeholder="Amount">
      <div class="input-group-addon">.00</div>
    </div>
  </div>
  <!--ADDING IMAGE-->
    <div class="input-group">
      <label class="input-group-btn">
        <span class="btn btn-primary">
          <input name="img" type="file">
        </span>
      </label>
    </div>
  <!--DESCRIPTION-->
  <div class="form-group">
      <textarea class="form-control" name="description" rows="3"><?= $ad->description ?></textarea>
  </div>
  <button type="submit" class="btn btn-default">Update</button>
  <input type="text" name="id" value="<?= $ad->id ?>" style="display: none">
</form>
</div>