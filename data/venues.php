<?php

  # This is where you put your reviews.
  # You can plugin whatever data source you want to use. 
  # Important is, that you return an array with your reviews.

  return array(
    array(
      'name' => 'John Does Burgers',
      'desc' => 'Once you get rid of the cucumber, <br>the burger\'s quite good!', 
      'address' => 'Barbeque-Straße 2, 20259 Hamburg',
      'price' => 3, # The number of dollar signs
      'best_for' => 'Dinner', # "Lunch" or "Dinner". Can be anything.
      'url' => 'http://www.yelp.de/biz/john-doe-burger-hamburg', # An external URL
      'type' => 'American', # The category of the venue. Diner, sushi bar, cafe, etc
    ),
    array(
      'name' => 'La Bella Italia',
      'desc' => 'Man, what a great pizza!', 
      'address' => 'Am Teig Teich 102, 20259 Hamburg',
      'price' => 2, # The number of dollar signs
      'best_for' => 'Dinner', # "Lunch" or "Dinner". Can be anything.
      'url' => 'http://www.yelp.de/biz/la-bella-italia-hamburg', # An external URL
      'type' => 'Italian', # The category of the venue. Diner, sushi bar, cafe, etc
    ),
    array(
      'name' => 'Sushi-Town',
      'desc' => 'That was one delicious lunch!', 
      'address' => 'Wakame Weg 5, 20259 Hamburg',
      'price' => 1, # The number of dollar signs
      'best_for' => 'Fast-Food', # "Lunch" or "Dinner". Can be anything.
      'url' => 'http://www.yelp.de/biz/sushi-town-new-york', # An external URL
      'type' => 'Sushi', # The category of the venue. Diner, sushi bar, cafe, etc
    ),
  );

?>
