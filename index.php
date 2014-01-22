<?php

  # About:      A php thing to list nice places for grabbing food. 
  # Author:     Jan Oelze <jan@codein.is>
  # Date:       18. November 2013

  require_once 'data/venues.php';
  require_once 'src/functions.php';

  $config = array(
    'site_title' => 'Food in Musterstadt',                                                     # You should rename this to match your city.
    'author_link' => '<a target="_blank" href="http://twitter.com/janoelze">@janoelze</a>',    # This is displayed in the header.
    'base_url' => 'http://janoelze.de/food-in-x',                                              # Point this URL to your food-in-x site. No trailing slash please.
    'footer_text' => 'Some places I like to eat at. Hope you like it.',                        # The text, that is displayed in the footer.
    'theme_path' => 'assets/theme-default'                                                     # Change this as you like.
  );

  include 'templates/main.php';

?>
