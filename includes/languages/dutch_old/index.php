<?php
/*
  $Id: index.php,v 1.2 2003/07/11 09:04:22 jan0815 Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

//define('TEXT_MAIN', 'Dit is een standaardinstallatie van osCommerce project, de Artikelen zijn enkel voor demonstratiedoeleinden, <b>gelijk welk Artikel dat wordt gekocht zal niet worden geleverd en aangerekend.</b><br><br><table border="0" width="100%" cellspacing="5" cellpadding="2"><tr><td class="main" valign="top">' . tep_image(DIR_WS_IMAGES . 'default/1.gif') . '</td><td class="main" valign="top"><b>Error berichten</b><br><br>Als er waarschuwingen of foutmeldingen hierboven zijn, zorg dan voor dat deze zijn opgelost eer u verder gaat.<br><br>Foutmeldingen worden boven in beeld getoond en hebben de volgende <span class="messageStackError">Achtergrondkleur.</span><br><br>ER worden standaard controles uitgevoerd op de setup om voor een goede installatie te zorgen - deze controles kunnen worden uitgezet door het veranderen van includes/application_top.php.</td></tr><td class="main" valign="top">' . tep_image(DIR_WS_IMAGES . 'default/2.gif') . '</td><td class="main" valign="top"><b>Bewerken van de Site</b><br><br>De tekst die hier getoond wordt kan worden veranderd in het volgende bestand: <br><br><nobr class="messageStackSuccess">[Pad naar Catalogus]/includes/languages/' . $language . '/' . FILENAME_DEFAULT . '</nobr><br><br>U Kunt dit bestand direct met een editor bewerken of via administratie-Modes via <nobr class="messageStackSuccess">Taal->' . ucfirst($language) . '->Details</nobr> of via <nobr class="messageStackSuccess">Tools->File Manager</nobr>.<br><br>De Text wordt op de volgende manier getoont:<br><br><nobr>define(\'TEXT_MAIN\', \'<span class="messageStackSuccess">Dit is een Standaartinstallatie van osCommerce...</span>\');</nobr><br><br>De groene achtergrond kan hier bewerkt worden - belangrijk is dat nooit de define() opdracht wordt gewijzigt. Om de complete Text te verwijderen, schrijf je het op de volgende manier:<br><br><nobr>define(\'TEXT_MAIN\', \'\');</nobr><br><br>Meer Informaite over dit onderwerp vindt U <a href="http://www.php.net/define" target="_blank"><u>hier</u></a>.</td></tr><tr><td class="main" valign="top">' . tep_image(DIR_WS_IMAGES . 'default/3.gif') . '</td><td class="main" valign="top"><b>Het beveliging van de administratie Tool</b><br><br>Bij een standaart installatie van osCommerce is de administratie tool niet beveiligd! Het is daarom belangrijk dat U deel zelf zo snel mogelijk beveiligt (bv. met htaccess).</td></tr><tr><td class="main" valign="top">' . tep_image(DIR_WS_IMAGES . 'default/4.gif') . '</td><td class="main" valign="top"><b>Online Handboek</b><br><br>Er is een online <u>Engels</u>  handboek beschikbaar U vind deze onder<a href="http://wiki.oscommerce.com" target="_blank"><u>osCommerce Wiki Documentation Effort</u></a>.<br><br>Ons Nederlands Support Community vind U <a href="http://forums.oscommerce.nl/forums" target="_blank"><u>osCommerce Nederlands Community Support Forums</u></a>.</td></tr></table><br>Als U het Systeem achter deze winkel wil downloaden, of wilt samen werken ter verbeteringvan osCommerce bezoek ons dan <a href="http://www.oscommerce.nl" target="_blank"><u>de Nederlandse Support Site van osCommerce</u></a> of <a href="http://www.oscommerce.nl" target="_blank"><u>de Engelse Support Site van osCommerce</u></a>. Deze winkel gebruikt osCommerce Versie<font color="#f0000"><b>' . PROJECT_VERSION . '</b></font>.');
define('TEXT_MAIN', 'test' . PROJECT_VERSION . '</b></font>.');
define('TABLE_HEADING_NEW_PRODUCTS', 'Nieuw Artikel Voor %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Verwachte Artikel(en)');
define('TABLE_HEADING_DATE_EXPECTED', 'Datum');

if ( ($category_depth == 'products') || (isset($HTTP_GET_VARS['manufacturers_id'])) ) {
  define('HEADING_TITLE', 'Wat hebben we hier?');
  define('TABLE_HEADING_IMAGE', '');
  define('TABLE_HEADING_MODEL', 'Model/Type');
  define('TABLE_HEADING_PRODUCTS', 'Artikel Naam');
  define('TABLE_HEADING_MANUFACTURER', 'Fabrikant');
  define('TABLE_HEADING_QUANTITY', 'Aantal');
  define('TABLE_HEADING_PRICE', 'Prijs');
  define('TABLE_HEADING_WEIGHT', 'Gewicht');
  define('TABLE_HEADING_BUY_NOW', 'Koop NU');
  define('TEXT_NO_PRODUCTS', 'Er bevinden zich geen Artikelen in deze Categorie.');
  define('TEXT_NO_PRODUCTS2', 'Er zijn geen Artikelen van deze Fabrikant beschikbaar.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Artikel: ');
  define('TEXT_SHOW', '<b>Toon:</b>');
  define('TEXT_BUY', 'Koop 1 \'');
  define('TEXT_NOW', '\' NU!');
  define('TEXT_ALL_CATEGORIES', 'Alle Categorie�n');
  define('TEXT_ALL_MANUFACTURERS', 'Alle Fabrikanten');
} elseif ($category_depth == 'top') {
  define('HEADING_TITLE', 'Nieuw Binnengekomen');
} elseif ($category_depth == 'nested') {
  define('HEADING_TITLE', 'Categorie�n');
}
?>
