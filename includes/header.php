<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  if ($messageStack->size('header') > 0) {
    echo '<div class="grid_24">' . $messageStack->output('header') . '</div>';
  }
?>

<div id="header" class="grid_24">
  <div id="storeLogo"><?php echo '<a href="' . tep_href_link(FILENAME_DEFAULT) . '">' . tep_image(DIR_WS_IMAGES . 'store_logo.png', STORE_NAME) . '</a>'; ?></div>

  <!--div id="headerShortcuts"-->
<?php 
//  echo tep_draw_button(HEADER_TITLE_CART_CONTENTS . ($cart->count_contents() > 0 ? ' (' . $cart->count_contents() . ')' : ''), 'cart', tep_href_link(FILENAME_SHOPPING_CART)) .
//       tep_draw_button(HEADER_TITLE_CHECKOUT, 'triangle-1-e', tep_href_link(FILENAME_CHECKOUT_SHIPPING, '', 'SSL')) .
//       tep_draw_button(HEADER_TITLE_MY_ACCOUNT, 'person', tep_href_link(FILENAME_ACCOUNT, '', 'SSL'));
//
//  if (tep_session_is_registered('customer_id')) {
//    echo tep_draw_button(HEADER_TITLE_LOGOFF, null, tep_href_link(FILENAME_LOGOFF, '', 'SSL'));
//  }
?>
  <!--/div>

<script type="text/javascript">
  $("#headerShortcuts").buttonset();
</script-->


<!--div class="grid_24 ui-widget infoBoxContainer">
  <div class="ui-widget-header infoBoxHeading"><?php //echo '&nbsp;&nbsp;' . $breadcrumb->trail(' &raquo; '); ?></div>
</div-->

            <div id="ButtonBar">
                <div id="ButtonBarContent">
                    <span class="Button">
                        <a href="." >
                            Home
                        </a>
                    </span>
                    <span class="ButtonSeperator1">&nbsp;</span>
                    <span class="ButtonSeperator2">&nbsp;</span>
                    <span class="Button">
                        <a href="account.php" onclick="GA_link('account.php'); return false;">
                            <?php echo HEADER_TITLE_MY_ACCOUNT; ?>
                        </a>
                    </span>
                    <span class="ButtonSeperator1">&nbsp;</span>
                    <span class="ButtonSeperator2">&nbsp;</span>
                    <span class="Button">
                        <a href="https://badmintongear.securearea.eu/website/index.php?TreeItem=108674" onclick="GA_link('https://badmintongear.securearea.eu/website/index.php?TreeItem=108674'); return false;">
                            <?php echo HEADER_INFORMATION_CONTACT; ?>
                        </a>
                    </span>
                    <span class="ButtonSeperator1">&nbsp;</span>
                    <span class="ButtonSeperator2">&nbsp;</span>
                    <span class="Button">
                        <a href="http://www.badmintongear.nl/Webwinkel-Page-108672/Algemene-Voorwaarden.html" >
                            <?php echo HEADER_LICENCE_AGREEMENT; ?>
                        </a>
                    </span>
                    <span class="ButtonSeperator1">&nbsp;</span>
                    <span class="ButtonSeperator2">&nbsp;</span>
                    <span class="Button">
                        <a href="http://www.badmintongear.nl/Free-Shipping-(Holland-only)" >
                            <?php echo HEADER_ORDERWITHOUT; ?>
                        </a>
                    </span>
                    <span class="ButtonSeperator1">&nbsp;</span>
                    <span class="ButtonSeperator2">&nbsp;</span>
                    <span class="Button">
                        <a href="http://www.badmintongear.nl/Webwinkel-Page-117596/Bespan-Service.html" >
                            <?php echo HEADER_BESPAN_SERVICE; ?>
                        </a>
                    </span>
                    <span class="ButtonSeperator1">&nbsp;</span>
                    <span class="ButtonSeperator2">&nbsp;</span>
                    <span class="Button">
                        <a href="http://www.badmintongear.nl/Newsletter" >
                            <?php echo HEADER_NEWSLETTER; ?>

                        </a>
                    </span>
                </div>
            </div>
</div>






<!-- error messages -->
<?php
  if (isset($HTTP_GET_VARS['error_message']) && tep_not_null($HTTP_GET_VARS['error_message'])) {
?>
<table border="0" width="100%" cellspacing="0" cellpadding="2">
  <tr class="headerError">
    <td class="headerError"><?php echo htmlspecialchars(stripslashes(urldecode($HTTP_GET_VARS['error_message']))); ?></td>
  </tr>
</table>
<?php
  }

  if (isset($HTTP_GET_VARS['info_message']) && tep_not_null($HTTP_GET_VARS['info_message'])) {
?>
<table border="0" width="100%" cellspacing="0" cellpadding="2">
  <tr class="headerInfo">
    <td class="headerInfo"><?php echo htmlspecialchars(stripslashes(urldecode($HTTP_GET_VARS['info_message']))); ?></td>
  </tr>
</table>
<?php
  }
?>
