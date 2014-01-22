<?php

  # This is where you put your reviews.
  # You can plug in whatever data source you want to use. 
  # Important is that $venues points to an array with your reviews.

  $venues = array(
    array(
      'name' => 'John Does Burgers',
      'desc' => 'Lorem Ipsum dolor sit amet', 
      'address' => 'Eppendorferweg 62, 20259 Hamburg',
      'price' => 3, # The number of dollar signs
      'best_for' => 'Dinner', # "Lunch" or "Dinner". Can be anything.
      'url' => 'http://www.yelp.de/biz/john-doe-burger-hamburg', # An external URL
      'type' => 'American', # The category of the venue. Diner, sushi bar, cafe, etc
    ),
  );

?>
