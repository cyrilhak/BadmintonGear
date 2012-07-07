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


<?php
  if ($oscTemplate->hasBlocks('boxes_column_right')) {
?>

<div class="col3">
  <?php echo $oscTemplate->getBlocks('boxes_column_right'); ?>
</div>

<?php
  }
?>
<div class="row">
    <div class="col12" style="background-color: #2b2f38;">&nbsp;</div>
</div>
<div class="row">
    <div class="col12" style="background-color: #2b2f38; color: #FFFFFF; ">
        <?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
    </div>
</div>
</div> <!-- bodyWrapper //-->

<?php echo $oscTemplate->getBlocks('footer_scripts'); ?>
</div>

</body>
</html>
