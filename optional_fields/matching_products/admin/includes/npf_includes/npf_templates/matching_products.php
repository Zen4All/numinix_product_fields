<?php
  // skip the current product
  $products_array = array((int)$_GET['pID']);
?>
          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>          
          <tr bgcolor="#DDEACC">
            <td class="main"><?php echo TEXT_PRODUCTS_MATCHING_COLOR; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_products_pull_down('matching_color', 'size="15"', $products_array, true, $pInfo->matching_color, true); ?></td>
          </tr>
          <tr bgcolor="#DDEACC">
            <td class="main"><?php echo TEXT_PRODUCTS_MATCHING_FLEECE; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_products_pull_down('matching_fleece', 'size="15"', $products_array, true, $pInfo->matching_fleece, true); ?></td>
          </tr>
          <tr bgcolor="#DDEACC">
            <td class="main"><?php echo TEXT_PRODUCTS_MATCHING_TANK; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_products_pull_down('matching_tank', 'size="15"', $products_array, true, $pInfo->matching_tank, true); ?></td>
          </tr>
          <tr bgcolor="#DDEACC">
            <td class="main"><?php echo TEXT_PRODUCTS_MATCHING_TSHIRT; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_products_pull_down('matching_tshirt', 'size="15"', $products_array, true, $pInfo->matching_tshirt, true); ?></td>
          </tr>
          <tr bgcolor="#DDEACC">
            <td class="main"><?php echo TEXT_PRODUCTS_MATCHING_GENDER; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_products_pull_down('matching_gender', 'size="15"', $products_array, true, $pInfo->matching_gender, true); ?></td>
          </tr>
          <tr bgcolor="#DDEACC">
            <td class="main"><?php echo TEXT_PRODUCTS_MATCHING_YOUTH; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_products_pull_down('matching_youth', 'size="15"', $products_array, true, $pInfo->matching_youth, true); ?></td>
          </tr>                              
          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>
