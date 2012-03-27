<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  $oscTemplate->buildBlocks();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php echo HTML_PARAMS; ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>" />
<title><?php echo tep_output_string_protected($oscTemplate->getTitle()); ?></title>
<base href="<?php echo (($request_type == 'SSL') ? HTTPS_SERVER : HTTP_SERVER) . DIR_WS_CATALOG; ?>" />
<link rel="stylesheet" type="text/css" href="ext/jquery/ui/redmond/jquery-ui-1.8.6.css" />
<script type="text/javascript" src="ext/jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="ext/jquery/ui/jquery-ui-1.8.6.min.js"></script>

<?php
  if (tep_not_null(JQUERY_DATEPICKER_I18N_CODE)) {
?>
<script type="text/javascript" src="ext/jquery/ui/i18n/jquery.ui.datepicker-<?php echo JQUERY_DATEPICKER_I18N_CODE; ?>.js"></script>
<script type="text/javascript">
$.datepicker.setDefaults($.datepicker.regional['<?php echo JQUERY_DATEPICKER_I18N_CODE; ?>']);
</script>
<?php
  }
?>

<script type="text/javascript" src="ext/jquery/bxGallery/jquery.bxGallery.1.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="ext/jquery/fancybox/jquery.fancybox-1.3.4.css" />
<script type="text/javascript" src="ext/jquery/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="ext/960gs/<?php echo ((stripos(HTML_PARAMS, 'dir="rtl"') !== false) ? 'rtl_' : ''); ?>960_24_col.css" />
<link rel="stylesheet" type="text/css" href="stylesheet_freeoscommerce_009.css">
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<link rel="stylesheet" type="text/css" href="badmintongear_css/Global.css" />
<link rel="stylesheet" type="text/css" href="badmintongear_css/jquery-ui-1.8.9.custom.css" />			
<link rel="stylesheet" type="text/css" href="badmintongear_css/demo.css" />
<link rel="stylesheet" type="text/css" href="badmintongear_css/Kameleon.css" />
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>" />
<meta name="author" content="Cyril" />
<meta name="Description" content="Uw specialist op badmintongebied" />
<meta name="keywords" content="" />
<?php echo $oscTemplate->getBlocks('header_tags'); ?>
</head>
<body id="freeoscommerce_009">

<div id="wrapper1">
<?php
// BOF: from header.php -- error message and info message
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
// EOF: from header.php -- error message and info message

// Get cart content count for Shopping Cart menu link
$cart_count = '';
if($cart->count_contents() > 0)
{
  $cart_count = ' (' . $cart->count_contents() . ')';
}

?>
  <div id="wrapper2">
<!-- Header -->        
    <div id="header_wrapper">
      <div id="header">
        <div id="top_menu">
          <span><?php echo '<a href="' . tep_href_link(FILENAME_DEFAULT) . '">Home</a>'; ?></span>
          <span><?php echo '<a href="' . tep_href_link(FILENAME_SPECIALS) . '">' . MODULE_BOXES_SPECIALS_BOX_TITLE . '</a>'; ?></span>
          <span><?php echo '<a href="' . tep_href_link(FILENAME_ACCOUNT) . '">' . HEADER_TITLE_MY_ACCOUNT . '</a>'; ?></span>
          <span><?php echo '<a href="' . tep_href_link(FILENAME_SHOPPING_CART) . '">' . MODULE_BOXES_SHOPPING_CART_BOX_TITLE . $cart_count . '</a>'; ?></span>
          <span><?php echo '<a href="' . tep_href_link(FILENAME_CHECKOUT_SHIPPING) . '">' . HEADER_TITLE_CHECKOUT . '</a>'; ?></span>
          <?php if (tep_session_is_registered('customer_id')) { ?>
            <span><a href="<?php echo tep_href_link(FILENAME_LOGOFF, '', 'SSL'); ?>"><?php echo HEADER_TITLE_LOGOFF; ?></a></span>
          <?php } ?>
        </div>
      </div>
      <div id="header_background1"></div>
      <div id="header_background2"></div>
    </div>
<!-- Content and Sidebars-->    
    <div id="wrapper3">
      <div id="content_wrapper">
        <div id="content">
          <div id="navigation">
        You are here: 
        <?php 
	    // BOF: from header.php -- breadcrumb
        echo '&nbsp;&nbsp;' . $breadcrumb->trail(' &raquo; ');
	    // EOF: from header.php -- breadcrumb
        ?>
            <hr class="accessibility">
          </div>
          <div>