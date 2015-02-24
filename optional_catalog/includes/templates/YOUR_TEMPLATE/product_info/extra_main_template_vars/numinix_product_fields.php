<?php
/**
 * product_info header_php.php 
 *
 * @package page
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: numinix_product_fields.php 4 2011-09-28 01:00:29Z numinix $
 */

  // Begin Numinix Product Fields
  if (SHOW_PRODUCT_INFO_DIAMETER == 1) $npf_attributes .= ', p.products_diameter';
  if (SHOW_PRODUCT_INFO_DIMENSIONS == 1) $npf_attributes .= ', p.products_length, p.products_width, p.products_height, p.products_dim_type';
  if (SHOW_PRODUCT_INFO_ACTUAL_WEIGHT == 1) $npf_attributes .= ', p.products_actual_weight, p.products_weight_type';
  if (SHOW_PRODUCT_INFO_CONDITION == 1) $npf_attributes .= ', p.products_condition';
  if (SHOW_PRODUCT_INFO_UPC == 1 || SHOW_PRODUCT_INFO_ISBN == 1) $npf_attributes .= ', p.products_upc, p.products_isbn';
  if (SHOW_PRODUCT_INFO_OUT_OF_STOCK == 1) $npf_attributes .= ', p.out_of_stock';
  if (SHOW_PRODUCT_INFO_SKU == 1) $npf_attributes .= ', p.products_sku'; 
  if (SHOW_PRODUCT_INFO_CARE_INSTRUCTIONS == 1) $npf_attributes .= ', pd.care_instructions';
  if (SHOW_PRODUCT_INFO_DESCRIPTION2 == 1) $npf_attributes .= ', pd.products_description2';
  
  // build query
  $products_query = "SELECT p.products_weight" . $npf_attributes . " 
                     FROM " . TABLE_PRODUCTS . " p, " . TABLE_PRODUCTS_DESCRIPTION . " pd
                     WHERE p.products_id = " . (int)$_GET['products_id'] . " 
                     AND p.products_id = pd.products_id 
                     AND pd.language_id = '" . (int)$_SESSION['languages_id'] . "' LIMIT 1";
  // execute query
  $products = $db->Execute($products_query);
  // store variables
  $products_length = $products->fields['products_length'];
  $products_width = $products->fields['products_width'];
  $products_height = $products->fields['products_height'];
  $products_diameter = $products->fields['products_diameter'];
  $products_weight = $products->fields['products_weight'];
  $products_actual_weight = $products->fields['products_actual_weight'];
  $products_dim_type = strtolower($products->fields['products_dim_type']);
  $products_weight_type = strtolower($products->fields['products_weight_type']);
  $products_description2 = $products->fields['products_description2'];
  $care_instructions = $products->fields['care_instructions'];
  $products_condition = $products->fields['products_condition'];
  $products_upc = $products->fields['products_upc'];
  $products_isbn = $products->fields['products_isbn'];
  $products_out_of_stock = $products->fields['out_of_stock'];
  $products_sku = $products->fields['products_sku'];
  // create conversions
  if (SHOW_PRODUCT_INFO_CONVERSIONS == 1) {
    if ($products_weight_type == 'kgs') {
      $products_weight2 = round($products_weight * 2.20462262, 2);
      $products_actual_weight2 = round($products_actual_weight * 2.20462262, 2);
      $products_weight_type2 = 'lbs';
    } else {
      $products_weight2 = round($products_weight * 0.45359237, 2);
      $products_actual_weight2 = round($products_actual_weight * 0.45359237, 2);
      $products_weight_type2 = 'kgs';
    }
    if ($products_dim_type == 'cm') {
      $products_dim_type2 = 'in';
      $conversion = 0.393700787;
    } else {
      $products_dim_type2 = 'cm';
      $conversion = 2.54;
    }
    if (SHOW_PRODUCT_INFO_SMALLER_UNITS == 1) { 
      if ($products_weight_type == 'kgs') {
        $products_weight_type = 'g';
        $products_weight_type2 = 'oz';
        $products_weight = $products_weight * 1000;
        $products_weight2 = $products_weight2 * 16;
        $products_actual_weight = $products_actual_weight * 1000;
        $products_actual_weight2 = $products_actual_weight2 * 16;
      } else {
        $products_weight_type = 'oz';
        $products_weight_type2 = 'g';
        $products_weight = $products_weight * 0.0625;
        $products_weight2 = $products_weight2 * 0.001;
        $products_actual_weight = $products_actual_weight * 0.0625;
        $products_actual_weight2 = $products_actual_weight2 * 0.001;
      }
    } 
    $products_weight_display = TEXT_PRODUCT_WEIGHT . $products_weight . $products_weight_type . '/' . $products_weight2 . $products_weight_type2;
    $products_actual_weight_display = TEXT_PRODUCTS_ACTUAL_WEIGHT . $products_actual_weight . $products_weight_type . '/' . $products_actual_weight2 . $products_weight_type2;
    $products_dim_display = TEXT_PRODUCT_DIMENSIONS . ($products_length > 0 ? TEXT_PRODUCTS_LENGTH . $products_length . $products_dim_type . ' (' . round($products_length * $conversion, 1) . $products_dim_type2 . ') ' : '') . ($products_width > 0 ? TEXT_PRODUCTS_WIDTH . $products_width . $products_dim_type . ' (' . round($products_width * $conversion, 1) . $products_dim_type2 . ') ' : '') . ($products_height > 0 ? TEXT_PRODUCTS_HEIGHT . $products_height . $products_dim_type . ' (' . round($products_height * $conversion, 1) . $products_dim_type2 . ')' : '');
    $products_diameter_display = TEXT_PRODUCTS_DIAMETER . ($products_diameter > 0 ? $products_diameter . $products_dim_type . ' (' . round($products_diameter * $conversion, 1) . $products_dim_type2 . ') ' : '');
  } else {
    
    if (SHOW_PRODUCT_INFO_SMALLER_UNITS == 1) { 
      if ($products_weight_type = 'kgs') {
        $products_weight_type = 'g';
        $products_weight = $products_weight * 1000;
      } else {
        $products_weight_type = 'oz';
        $products_weight = $products_weight * 0.0625;
      }
    } 
    $products_weight_display = TEXT_PRODUCT_WEIGHT .  $products_weight . $products_weight_type;
    $products_actual_weight_display = TEXT_PRODUCTS_ACTUAL_WEIGHT .  $products_actual_weight . $products_weight_type;
    $products_dim_display = TEXT_PRODUCT_DIMENSIONS . ($products_length > 0 ? TEXT_PRODUCTS_LENGTH . $products_length . $products_dim_type . ' ' : '') . ($products_width > 0 ? TEXT_PRODUCTS_WIDTH . $products_width . $products_dim_type . ' ' : '') . ($products_height > 0 ? TEXT_PRODUCTS_HEIGHT . $products_height . $products_dim_type : ''); 
    $products_diameter_display = TEXT_PRODUCTS_DIAMETER . ($products_diameter > 0 ? $products_diameter . $products_dim_type : '');
  }
  //End Numinix Product Fields