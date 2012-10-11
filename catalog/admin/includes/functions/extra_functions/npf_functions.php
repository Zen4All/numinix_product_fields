<?php

function dirList ($directory) {
  // create an array to hold directory list
  $results = array();
  // create a handler for the directory
  $handler = opendir($directory);
  // keep going until all files in directory have been read
  while ($file = readdir($handler)) {
    // if $file isn't this directory or its parent, 
    // add it to the results array
    if ($file != '.' && $file != '..')
      $results[] = $file;
  }
  // tidy up: close the handler
  closedir($handler);
  // done!
  return $results;
}

function zen_get_products_description2($product_id, $language_id) {
  global $db;
  $product = $db->Execute("select products_description2
                           from " . TABLE_PRODUCTS_DESCRIPTION . "
                           where products_id = '" . (int)$product_id . "'
                           and language_id = '" . (int)$language_id . "'");

  return $product->fields['products_description2'];
}

function zen_get_products_video_embed($product_id, $language_id) {
  global $db;
  $product = $db->Execute("select products_video_embed
                           from " . TABLE_PRODUCTS_DESCRIPTION . "
                           where products_id = '" . (int)$product_id . "'
                           and language_id = '" . (int)$language_id . "'");

  return $product->fields['products_video_embed'];
}