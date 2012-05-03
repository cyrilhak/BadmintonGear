<?php
/*
  $Id: password_forgotten.php,v 1.6 2002/11/19 01:48:08 dgw_ Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Login');
define('NAVBAR_TITLE_2', 'Wachtwoord vergeten');
define('HEADING_TITLE', 'Nieuw wachtwoord aanvragen');
define('ENTRY_EMAIL_ADDRESS', 'E-mail adres:');
define('TEXT_MAIN', 'Indien u uw wachtwoord bent vergeten vul dan hieronder uw e-mail adres in en wij sturen u een e-mail met uw nieuwe wachtwoord.');
define('TEXT_NO_EMAIL_ADDRESS_FOUND', '<font color="#ff0000"><b>Let op:</b></font> Het e-mail is niet in onze database gevonden. Probeer het opnieuw');
define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Nieuw wachtwoord');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Het nieuwe wachtwoord was aangevraagd via IP-adres ' . $REMOTE_ADDR . '.' . "\n\n" . 'Uw nieuwe wachtwoord voor toegang tot \'' . STORE_NAME . '\' is:' . "\n\n" . '   %s' . "\n\n");
define('TEXT_PASSWORD_SENT', 'Een nieuw wachtwoord is naar het opgegeven e-mail adres verzonden.');
?>