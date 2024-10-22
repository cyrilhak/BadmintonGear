<?php
/*
  $Id: login.php,v 1.11 2002/06/03 13:19:42 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

if ($HTTP_GET_VARS['origin'] == FILENAME_CHECKOUT_PAYMENT) {
  define('NAVBAR_TITLE', 'Bestelling');
  define('HEADING_TITLE', 'Online bestellen is makkelijk.');
  define('TEXT_STEP_BY_STEP', 'We zullen u er stap voor stap doorheen helpen.');
} else {
  define('NAVBAR_TITLE', 'Login');
  define('HEADING_TITLE', 'Welkom, u kunt hier inloggen');
  define('TEXT_STEP_BY_STEP', ''); // should be empty
}

define('HEADING_NEW_CUSTOMER', 'Nieuwe klant');
define('TEXT_NEW_CUSTOMER', 'Ik ben een nieuwe klant.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Door uw klantgegevens op te geven bij ' . STORE_NAME . ' kunt u sneller winkelen en kunt u profiteren van kortingen en speciale aanbiedingen die alleen voor geregistreerde klanten gelden.');

define('HEADING_RETURNING_CUSTOMER', 'Terugkerende klanten');
define('TEXT_RETURNING_CUSTOMER', 'Ik ben een terugkerende klant.');
define('ENTRY_EMAIL_ADDRESS', 'E-mail adres:');
define('ENTRY_PASSWORD', 'Wachtwoord:');

define('TEXT_PASSWORD_FORGOTTEN', 'Wachtwoord vergeten? Klik Hier.');

define('TEXT_LOGIN_ERROR', '<font color="#ff0000"><b>FOUT:</b></font> Geen overeenkomstig \'e-mail adres\' en/of \'wachtwoord\'.');
define('TEXT_VISITORS_CART', '<font color="#ff0000"><b>NOTE:</b></font> Uw &quot;Bezoekers Winkelwagen&quot; inhoud zal overgeplaatst worden naar uw &quot;Klanten Winkelwagen&quot; zodra u bent aangemeld. <a href="javascript:session_win();">[Meer Info]</a>');
?>