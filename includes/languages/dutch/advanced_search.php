<?php
/*
  $Id: advanced_search.php,v 1.13 2002/05/27 13:57:38 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Geavanceerd Zoeken');
define('HEADING_TITLE_1', 'Geavanceerd Zoeken');

define('HEADING_SEARCH_CRITERIA', 'Zoek Criteria');

define('TEXT_SEARCH_IN_DESCRIPTION', 'Zoek In Product Omschrijvingen');
define('ENTRY_CATEGORIES', 'Categorieën:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Inclusief Subcategorieën');
define('ENTRY_MANUFACTURERS', 'Fabrikanten:');
define('ENTRY_PRICE_FROM', 'Prijs Vanaf:');
define('ENTRY_PRICE_TO', 'Prijs Tot:');
define('ENTRY_DATE_FROM', 'Vanaf Datum:');
define('ENTRY_DATE_TO', 'Tot Datum:');

define('TEXT_SEARCH_HELP_LINK', '<u>Hulp met Zoeken</u> [?]');

define('TEXT_ALL_CATEGORIES', 'Alle Categorieën');
define('TEXT_ALL_MANUFACTURERS', 'Alle Fabrikanten');

define('HEADING_SEARCH_HELP', 'Hulp met Zoeken');
define('TEXT_SEARCH_HELP', 'Sleutelwoorden mogen gescheiden worden met AND en/of OR statements om meer controle te krijgen over het zoek resultaat.<br><br>Bijvoorbeeld, <u>Linux AND Redhat</u> zal een resultaat geven waar beide woorden in voorkomen. Maar, voor <u>Muis OR Toetsenbord</u>, zal het resultaat terugkomen met beide woorden of een van de twee woorden.<br><br>Om op een exacte regel of serie woorden te zoeken kunt u de woorden tussen dubbel quotes plaatsen.<br><br>Bijvoorbeeld, <u>"AMD 2400+ Processor"</u> zal het resultaat generen waar deze excate zin is terug te vinden.<br><br>Haken kunnen ook nog gebruikt worden om verder controle te krijgen over de zoekopdracht.<br><br>Bijvoorbeeld, <u>Linux and (Redhat or Suse or "Mandrake 9.0")</u>.');
define('TEXT_CLOSE_WINDOW', '<u>Sluit Venster</u> [x]');

define('JS_AT_LEAST_ONE_INPUT', '* Een van de volgende velden moet ingevuld worden:\n    Sleutelwoorden\n    Datum Toegevoegd Vanaf\n    Datum Toegevoegd Tot\n    Prijs Vanaf\n    Prijs Tot\n');
define('JS_INVALID_FROM_DATE', '* Vanaf Datum Ongeldig\n');
define('JS_INVALID_TO_DATE', '* Tot Datum Ongeldig\n');
define('JS_TO_DATE_LESS_THAN_FROM_DATE', '* Tot Datum moet groter of gelijk zijn aan de Vanaf Datum\n');
define('JS_PRICE_FROM_MUST_BE_NUM', '* Prijs Vanaf moet een nummer zijn\n');
define('JS_PRICE_TO_MUST_BE_NUM', '* Prijs Tot moet een nummer zijn\n');
define('JS_PRICE_TO_LESS_THAN_PRICE_FROM', '* Prijs Tot moet groter of gelijk zijn aan de Prijs Vanaf\n');
define('JS_INVALID_KEYWORDS', '* Ongeldige Sleutelwoorden\n');
?>
