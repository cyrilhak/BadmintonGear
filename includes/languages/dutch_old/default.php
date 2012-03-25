<?php
/*
  $Id: default.php,v 1.18 2002/01/14 10:34:17 jan0815 Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('TEXT_MAIN', 'Momenteel is ' . STORE_NAME . ' niet in bedrijf. U kunt een email sturen naar ' . STORE_OWNER_EMAIL_ADDRESS . ' met als onderwerp \'Online\', dan krijgt u zodra de winkel online is een bericht. U kunt al wel vast een kijkje nemen in de winkel. Een groot aantal producten zijn al ingevoerd.');
define('TABLE_HEADING_NEW_PRODUCTS', 'Nieuwe Producten voor %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Verwachte Producten');
define('TABLE_HEADING_DATE_EXPECTED', 'Verwacht op');

if ($category_depth == 'products' || $HTTP_GET_VARS['manufacturers_id']) {
  define('HEADING_TITLE', 'Een kijken wat we hier hebben');
  define('TABLE_HEADING_IMAGE', '');
  define('TABLE_HEADING_MODEL', 'Model');
  define('TABLE_HEADING_PRODUCTS', 'Product Naam');
  define('TABLE_HEADING_MANUFACTURER', 'Farbikant');
  define('TABLE_HEADING_QUANTITY', 'Aantal');
  define('TABLE_HEADING_PRICE', 'Prijn');
  define('TABLE_HEADING_WEIGHT', 'Gewicht');
  define('TABLE_HEADING_BUY_NOW', 'Koop Nu');
  define('TEXT_NO_PRODUCTS', 'Er zijn geen product in deze categorie.');
  define('TEXT_NO_PRODUCTS2', 'Er zijn geen producten beschikbaar van deze leverancier.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Aantal Producten: ');
  define('TEXT_SHOW', '<b>Show:</b>');
  define('TEXT_BUY', 'Koop 1 \'');
  define('TEXT_NOW', '\' nu');
  define('TEXT_ALL', 'Alle');
} elseif ($category_depth == 'top') {
  define('HEADING_TITLE', 'Wat is hier nieuw?');
} elseif ($category_depth == 'nested') {
  define('HEADING_TITLE', 'Categorieën');
}
?>
