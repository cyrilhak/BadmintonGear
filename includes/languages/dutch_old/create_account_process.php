<?php
/*
  $Id: create_account_process.php,v 1.13 2002/11/19 01:48:08 dgw_ Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Account Aanmaken');
define('NAVBAR_TITLE_2', 'Verwerken');
define('HEADING_TITLE', 'Mijn Account Informatie');

define('EMAIL_SUBJECT', 'Welkom bij ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Beste Dhr. ' . stripslashes($HTTP_POST_VARS['lastname']) . ',' . "\n\n");
define('EMAIL_GREET_MS', 'Beste Mevr. ' . stripslashes($HTTP_POST_VARS['lastname']) . ',' . "\n\n");
define('EMAIL_GREET_NONE', 'Beste ' . stripslashes($HTTP_POST_VARS['firstname']) . ',' . "\n\n");
define('EMAIL_WELCOME', 'Wij heten u welkom bij <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_TEXT', 'U kunt nu gebruikmaken van <b>verschillende services</b> die wij aanbieden. Enkele van deze services zijn:' . "\n\n" . '<li><b>Permanente Winkelwagen</b> - Elk product die u hierin plaatst zal daar blijven totdat u ze zelf verwijderd, of gaat afrekenen.' . "\n" . '<li><b>Adresboek</b> - Wij kunnen de bestelling ergens anders afleveren dan uw eigen huis adres! Bijvoorbeeld een cadeau voor iemand die jarig is.' . "\n" . '<li><b>Bestel Geschiedenis</b> - Bekijk de bestellingen die u eerder heeft geplaatst.' . "\n" . '<li><b>Producten Reviews</b> - Deel uw mening met andere klanten.' . "\n\n");
define('EMAIL_CONTACT', 'Voor help met een van deze services kunt u een email sturen naar ' . STORE_NAME . ': ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_WARNING', '<b>Let op:</b> Dit email adres is door een van onze klanten aan ons gegeven. Als u zich niet heeft ingeschreven op onze winkel, stuur dan een email naar ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n");
?>
