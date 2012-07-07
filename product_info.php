<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_PRODUCT_INFO);

  $product_check_query = tep_db_query("select count(*) as total from " . TABLE_PRODUCTS . " p, " . TABLE_PRODUCTS_DESCRIPTION . " pd where p.products_status = '1' and p.products_id = '" . (int)$HTTP_GET_VARS['products_id'] . "' and pd.products_id = p.products_id and pd.language_id = '" . (int)$languages_id . "'");
  $product_check = tep_db_fetch_array($product_check_query);

  require(DIR_WS_INCLUDES . 'template_top.php');

  if ($product_check['total'] < 1) {
?>

<div class="contentContainer">
  <div class="contentText">
    <?php echo TEXT_PRODUCT_NOT_FOUND; ?>
  </div>

  <div style="float: right;">
    <?php echo tep_draw_button(IMAGE_BUTTON_CONTINUE, 'triangle-1-e', tep_href_link(FILENAME_DEFAULT)); ?>
  </div>
</div>

<?php
  } else {
    $product_info_query = tep_db_query("select p.products_id, pd.products_name, pd.products_description, p.products_model, p.products_quantity, p.products_image, pd.products_url, p.products_price, p.products_tax_class_id, p.products_date_added, p.products_date_available, p.manufacturers_id from " . TABLE_PRODUCTS . " p, " . TABLE_PRODUCTS_DESCRIPTION . " pd where p.products_status = '1' and p.products_id = '" . (int)$HTTP_GET_VARS['products_id'] . "' and pd.products_id = p.products_id and pd.language_id = '" . (int)$languages_id . "'");
    $product_info = tep_db_fetch_array($product_info_query);

    tep_db_query("update " . TABLE_PRODUCTS_DESCRIPTION . " set products_viewed = products_viewed+1 where products_id = '" . (int)$HTTP_GET_VARS['products_id'] . "' and language_id = '" . (int)$languages_id . "'");

    if ($new_price = tep_get_products_special_price($product_info['products_id'])) {
      $products_price = '<del>' . $currencies->display_price($product_info['products_price'], tep_get_tax_rate($product_info['products_tax_class_id'])) . '</del> <span class="productSpecialPrice">' . $currencies->display_price($new_price, tep_get_tax_rate($product_info['products_tax_class_id'])) . '</span>';
    } else {
      $products_price = $currencies->display_price($product_info['products_price'], tep_get_tax_rate($product_info['products_tax_class_id']));
    }

    if (tep_not_null($product_info['products_model'])) {
      $products_name = $product_info['products_name'] . '<br /><span class="smallText">[' . $product_info['products_model'] . ']</span>';
    } else {
      $products_name = $product_info['products_name'];
    }
?>

<?php //echo tep_draw_form('cart_quantity', tep_href_link(FILENAME_PRODUCT_INFO, tep_get_all_get_params(array('action')) . 'action=add_product')); ?>

<div class="table_container">
    <div class="table_row">
         <div class="table_column"><h1><?php echo $products_name; ?></h1></div>
    </div>
    <div class="table_row">
        <div class="table_column">
            <div class="table_container">
                <div class="table_row">
                    <div class="table_column">
                        <div id="piGal">
                            <!-- begin plaatje -->
                            <?php
                                if (tep_not_null($product_info['products_image'])) {
                                $pi_query = tep_db_query("select image, htmlcontent from " . TABLE_PRODUCTS_IMAGES . " where products_id = '" . (int)$product_info['products_id'] . "' order by sort_order");

                                if (tep_db_num_rows($pi_query) > 0) {
                            ?>
                            <?php
                                    $pi_counter = 0;
                                    while ($pi = tep_db_fetch_array($pi_query)) {
                                    $pi_counter++;

                                    $pi_entry = '<a href="';

                                    if (tep_not_null($pi['htmlcontent'])) {
                                        $pi_entry .= '#piGalimg_' . $pi_counter;
                                    } else {
                                        $pi_entry .= tep_href_link(DIR_WS_IMAGES . $pi['image']);
                                    }

                                    $pi_entry .= '" target="_blank" rel="fancybox">' . tep_image(DIR_WS_IMAGES . $pi['image'],'',200) . '</a>';

                                    if (tep_not_null($pi['htmlcontent'])) {
                                        $pi_entry .= '<div style="display: none;"><div id="piGalimg_' . $pi_counter . '">' . $pi['htmlcontent'] . '</div></div>';
                                    }

                                    $pi_entry .= '';

                                    echo $pi_entry;
                                    }
                            ?>

                            <script type="text/javascript">
                            $('#piGal ul').bxGallery({
                            maxwidth: 300,
                            maxheight: 200,
                            thumbwidth: <?php echo (($pi_counter > 1) ? '75' : '0'); ?>,
                            thumbcontainer: 300,
                            load_image: 'ext/jquery/bxGallery/spinner.gif'
                            });
                            </script>

                            <?php
                                } else {
                            ?>

                                <div id="piGal" style="float: left;">
                                <?php echo '<a href="' . tep_href_link(DIR_WS_IMAGES . $product_info['products_image']) . '" target="_blank" rel="fancybox">' . tep_image(DIR_WS_IMAGES . $product_info['products_image'], addslashes($product_info['products_name']), null, null, 'hspace="5" vspace="5"') . '</a>'; ?>
                                </div>

                            <?php
                                }
                            ?>

                            <script type="text/javascript">
                            $("#piGal a[rel^='fancybox']").fancybox({
                            cyclic: true
                            });
                            </script>

                            <?php
                                }
                            ?>

                            <!-- eind plaatje -->
                        </div>
                    </div>
                    <div class="price">
                         <h1><?php echo $products_price; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table_row">
        <div class="table_column">
           <?php echo stripslashes($product_info['products_description']); ?> 
        </div>
    </div>
</div>

<?php
  }
 
  require(DIR_WS_INCLUDES . 'template_bottom.php');
  require(DIR_WS_INCLUDES . 'application_bottom.php');
?>
