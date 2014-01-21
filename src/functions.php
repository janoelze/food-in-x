<?php

  function get_venues(){
    global $venues;

    function alph_order($a, $b){
      return strcmp($a['name'], $b['name']);
    }

    usort($venues, "alph_order");

    return $venues;
  }

  function slugify($text){
    $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
    $text = trim($text, '-');
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = strtolower($text);
    $text = preg_replace('~[^-\w]+~', '', $text);

    if (empty($text)){
      return 'n-a';
    }

    return $text;
  }

?>
