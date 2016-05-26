<?php

require_once __DIR__ . '/../../models/Ads.php';

$ad = new Ads;
$ad->name = 'SNES',
$ad->description = 'Plays like new! Includes Mario Kart.',
$ad->price = 150.00,
$ad->image_url = 'img/uploads/100.png',
$ad->save();

$ad = new Ads;
$ad->name = 'Jeff Foxworthy\'s Redneck Dictionary I and II',
$ad->description = 'Jeff Foxworthy\'s Redneck Dictionary I and II. 2 hardback books with paper covers. Brand new-never read. Bought for my son and he never used. Retailed $16.95 each.',
$ad->price = 12.00,
$ad->image_url = 'img/foxworthy.jpg',
$ad->save();

$ad = new Ads;
$ad->name = 'Adult Folding Chairs w/Tablet',
$ad->description = 'For sale adult folding chairs with tablets. I got these chair at auction from school and are in "new condition" come two per box. These are commercial grade chairs and retail over $50 each, I am selling at $15 per chair , or $14 each if you buy 25 or more of them. Great for parties, training rooms, studying, etc.',
$ad->price = 15.00,
$ad->image_url = 'img/foldingChairs.jpg',
$ad->save();

$ad = new Ads;
$ad->name = 'James Avery Julietta Ringjuliett',
$ad->description = '14k and sterling silver With blue topaz',
$ad->price = 250.00,
$ad->image_url = 'img/juliettaRing.jpg',
$ad->save();


?>