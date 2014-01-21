<?php

  # About:      A php thing to list nice places for grabbing food. 
  # Author:     Jan Oelze <jan@codein.is>
  # Date:       18. November 2013

  require_once 'data/venues.php';
  require_once 'src/functions.php';

  $config = array(
    'app_title' => 'Food in Musterstadt',
    'base_url' => 'http://url.to/your/site' # No trailing slash, thanks.
  );

  include 'templates/main.php';

?>
