<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/
?>
          </div>        
        </div>
      </div>
      <div id="left_sidebar_wrapper">
        <div id="left_sidebar">
<?php
  if ($oscTemplate->hasBlocks('boxes_column_left')) 
  {
    // replace the quickfind button with "button_quick_find_freeoscommerce_105.gif"
	$boxes_column_left_search_modified = $oscTemplate->getBlocks('boxes_column_left');
	$boxes_column_left_search_modified = str_replace('button_quick_find.gif','button_quick_find_freeoscommerce_009.gif',$boxes_column_left_search_modified);
	echo $boxes_column_left_search_modified;
  }
?>
        </div>
      </div>
      <div id="right_sidebar_wrapper">
        <div id="right_sidebar">
<?php
  if ($oscTemplate->hasBlocks('boxes_column_right')) 
  {
    // replace the quickfind button with "button_quick_find_freeoscommerce_105.gif"
	$boxes_column_right_search_modified = $oscTemplate->getBlocks('boxes_column_right');
	$boxes_column_right_search_modified = str_replace('button_quick_find.gif','button_quick_find_freeoscommerce_009.gif',$boxes_column_right_search_modified);
	echo $boxes_column_right_search_modified;
  }
?>
        </div>
      </div>
    </div>
<!-- Footer -->    
    <div id="footer">
      <div id="footer_content">
	    <?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
        <br/><br/><a style="font-size: 11px;" href="http://zacharycoyne.com/" target="_blank">Tucson Web Designer</a>
      </div>
      <div id="footer_background1"></div>
      <div id="footer_background2"></div>
    </div>
<!-- Layout Graphics -->        
  </div>
  <div id="left_shadow"></div>
  <div id="right_shadow"></div>
</div>
<div id="top_background"></div>
<div id="main_background"></div>
<!-- Website Name/Logo -->    
<div id="website_name"><?php echo '<a href="' . tep_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a>'; ?></div>

<?php echo $oscTemplate->getBlocks('footer_scripts'); ?>

</body>
</html>