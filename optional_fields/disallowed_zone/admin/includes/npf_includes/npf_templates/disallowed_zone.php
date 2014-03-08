          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>          
          <tr bgcolor="#DDEACC">
            <td class="main"><?php echo TEXT_PRODUCTS_DISALLOWED_ZONE; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . str_replace('<select name="disallowed_zone">', '<select name="disallowed_zone"><option value="0">' . TEXT_SELECT_AN_OPTION . '</option>', zen_geo_zones_pull_down('name="disallowed_zone"', $pInfo->disallowed_zone)); ?></td>
          </tr>
          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>
