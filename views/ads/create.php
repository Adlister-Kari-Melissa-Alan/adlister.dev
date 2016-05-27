<?php
require_once '../models/Ads.php';
require_once '../utils/Input.php';

function adItem() {
    $name = Input::get('name');
    $price = Input::get('price');
    $description = Input::get('description');
    $ad = new Ads;
    //auth class to get id of a logged in user.
    $ad->user_id = 1;
    $ad->name = $name;
    $ad->description = $description;
    $ad->price = $price;
    $ad->image_url = ' ';
var_dump(Input::all());
    $ad->save();
}

if(Input::has('name') && Input::has('price') && Input::has('description')) {
    adItem();
}
?>

<div class="container">
  <form action="item_create.php" method="POST">
    <div class="form-group form-group-lg">
      <label for="itemName">Item Name</label>
      <input name="name" class="form-control" id="itemName" placeholder="Item Name">
    </div>
    <div class="form-group">
      <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
      <div class="input-group">
        <div class="input-group-addon">$</div>
        <input name="price" type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
        <div class="input-group-addon">.00</div>
      </div>
    </div>
    <div class="form-group">
        <textarea name="description" class="form-control" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>