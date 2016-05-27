<?php
  $ad=Ads::find(Input::get("id"));
  if ($_POST) {
    
    $ad->name = Input::get('name');
    $ad->description = Input::get('description');
    $ad->price = Input::get('price');
    $ad->save();

    header("Location: /ads/show?id=$ad->id");
    exit;
  }
?>


<div class="container">
    <form method="post">
  <div class="form-group form-group-lg">
    <label for="itemName">Item Name</label>
    <input type="text" class="form-control" name="name" value="<?= $ad->name ?>" id="itemName" placeholder="Item Name">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="text" class="form-control" name="price" value="<?= $ad->price ?>" id="exampleInputAmount" placeholder="Amount">
      <div class="input-group-addon">.00</div>
    </div>
  </div>
  <div class="form-group">
      <textarea class="form-control" name="description" rows="3"><?= $ad->description ?></textarea>
  </div>
  <button type="submit" class="btn btn-default">Update</button>
</form>
</div>