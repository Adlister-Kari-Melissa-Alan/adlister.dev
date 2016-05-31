<?php
  $ad=Ads::find(Input::get("id"));

?>

<div class="row">
  <div class="col-sm-6 col-md-6">
    <div class="thumbnail">
      <img src="/<?= $ad->image_url ?>" alt="<?=$ad->name ?>">
      <div class="caption">
        <h3><?=$ad->name ?></h3>
        <p><?=$ad->description ?></p>
        <?php if (Auth::id()==$ad->attributes['user_id']) { ?>
          <p><a href="/ads/edit?id=<?=$ad->attributes['id']?>" class="btn btn-primary" role="button">Edit</a></p>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-6">
    <div class="thumbnail">
      
      <div class="caption">
        <h3>$<?=$ad->price ?> </h3>
        <h3>Please call or text, cash only!</h3>
        <?php if (Auth::id()==$ad->attributes['user_id']) { ?>
          <p><a href="#" class="btn btn-primary" role="button">Delete</a></p>
        <?php } ?>
      </div>
    </div>
  </div>

</div>
