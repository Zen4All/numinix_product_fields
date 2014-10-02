<?php
    for ($i=0, $n=sizeof($languages); $i<$n; $i++) {
?>
          <tr>
            <td class="main" valign="top"><?php if ($i == 0) echo TEXT_CARE_INSTRUCTIONS; ?></td>
            <td colspan="2">
              <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="main" width="25" valign="top"><?php echo zen_image(DIR_WS_CATALOG_LANGUAGES . $languages[$i]['directory'] . '/images/' . $languages[$i]['image'], $languages[$i]['name']); ?>&nbsp;</td>
                  <td class="main" width="100%">
        						<?php echo zen_draw_textarea_field('care_instructions[' . $languages[$i]['id'] . ']', 'soft', '100%', '30', (isset($care_instructions[$languages[$i]['id']])) ? stripslashes($care_instructions[$languages[$i]['id']]) : zen_get_care_instructions($pInfo->products_id, $languages[$i]['id'])); ?>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
<?php
    }
?>