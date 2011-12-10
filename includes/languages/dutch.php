<?php
/*
  $Id: english.php,v 1.104 2002/11/13 20:56:34 harley_vb Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales..
setlocale(LC_TIME, 'nl_NL');
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'EUR');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="LTR" lang="nl"');

// charset for web pages and emails
define('CHARSET', 'iso-8859-1');

// page title
define('TITLE', 'osCommerce MS-2.2');

// header text in includes/header.php
define('HEADER_TITLE_CREATE_ACCOUNT', 'Account Aanmaken');
define('HEADER_TITLE_MY_ACCOUNT', 'Mijn Account');
//define('HEADER_TITLE_CART_CONTENTS', 'Inhoud Winkelwagen');
define('HEADER_TITLE_CART_CONTENTS', 'Winkelwagen');
define('HEADER_TITLE_CHECKOUT', 'Afrekenen');
define('HEADER_TITLE_TOP', 'Hoofdpagina');
define('HEADER_TITLE_CATALOG', 'Winkel');
define('HEADER_TITLE_LOGOFF', 'Uitloggen');
define('HEADER_TITLE_LOGIN', 'Inloggen');

// footer text in includes/footer.php
define('FOOTER_TEXT_REQUESTS_SINCE', 'Aanroepen sinds');

// text for gender
define('MALE', 'Man');
define('FEMALE', 'Vrouw');
define('MALE_ADDRESS', 'Dhr.');
define('FEMALE_ADDRESS', 'Mevr.');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

// categories box text in includes/boxes/categories.php
define('BOX_HEADING_CATEGORIES', 'Categorie�n');

// manufacturers box text in includes/boxes/manufacturers.php
define('BOX_HEADING_MANUFACTURERS', 'Fabrikanten');

// whats_new box text in includes/boxes/whats_new.php
define('BOX_HEADING_WHATS_NEW', 'Nieuwe&nbsp;Producten');

// quick_find box text in includes/boxes/quick_find.php
define('BOX_HEADING_SEARCH', 'Snel Zoeken');
define('BOX_SEARCH_TEXT', 'Gebruik sleutelworden om het product te vinden.');
define('BOX_SEARCH_ADVANCED_SEARCH', 'Geavanceerd Zoeken');

// specials box text in includes/boxes/specials.php
define('BOX_HEADING_SPECIALS', 'Aanbiedingen');

// reviews box text in includes/boxes/reviews.php
define('BOX_HEADING_REVIEWS', 'Reviews');
define('BOX_REVIEWS_WRITE_REVIEW', 'Schrijf een review over dit product!');
define('BOX_REVIEWS_NO_REVIEWS', 'Er zijn geen reviews over dit product. Wees de eerste!');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s van 5 Sterren!');

// shopping_cart box text in includes/boxes/shopping_cart.php
define('BOX_HEADING_SHOPPING_CART', 'Winkelwagen');
define('BOX_SHOPPING_CART_EMPTY', '0 voorwerpen');

// order_history box text in includes/boxes/order_history.php
define('BOX_HEADING_CUSTOMER_ORDERS', 'Bestel Geschiedenis');

// best_sellers box text in includes/boxes/best_sellers.php
define('BOX_HEADING_BESTSELLERS', 'Bestsellers');
define('BOX_HEADING_BESTSELLERS_IN', 'Bestsellers in<br>&nbsp;&nbsp;');

// notifications box text in includes/boxes/products_notifications.php
define('BOX_HEADING_NOTIFICATIONS', 'Notificaties');
define('BOX_NOTIFICATIONS_NOTIFY', 'Hou mij op de hoogte van updates voor <b>%s</b>');
define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Hou mij <b>niet</b> op de hoogte van updates voor <b>%s</b>');

// manufacturer box text
define('BOX_HEADING_MANUFACTURER_INFO', 'Fabrikant Info');
define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s Website');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Andere producten');

// languages box text in includes/boxes/languages.php
define('BOX_HEADING_LANGUAGES', 'Talen');

// currencies box text in includes/boxes/currencies.php
define('BOX_HEADING_CURRENCIES', 'Valuta');

// information box text in includes/boxes/information.php
define('BOX_HEADING_INFORMATION', 'Informatie');
define('BOX_INFORMATION_PRIVACY', 'Privacy Policy');
define('BOX_INFORMATION_CONDITIONS', 'Algemene&nbsp;Voorwaarden');
define('BOX_INFORMATION_SHIPPING', 'Verzend Info');
define('BOX_INFORMATION_CONTACT', 'Contact');

// tell a friend box text in includes/boxes/tell_a_friend.php
define('BOX_HEADING_TELL_A_FRIEND', 'Vertel een vriend');
define('BOX_TELL_A_FRIEND_TEXT', 'Vertel iemand die je kent over dit product.');

// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', 'Verzend Informatie');
define('CHECKOUT_BAR_PAYMENT', 'Betaal Informatie');
define('CHECKOUT_BAR_CONFIRMATION', 'Bevestigen');
define('CHECKOUT_BAR_FINISHED', 'Gereed!');

// pull down default text
define('PULL_DOWN_DEFAULT', 'Selecteer');
define('TYPE_BELOW', 'Type hieronder');

// javascript messages
define('JS_ERROR', 'Fouten hebben zich voorgedaan tijdens het verwerken van het formulier!\nMaak de volgende aanpassingen:\n\n');

define('JS_REVIEW_TEXT', '* De \'Review Tekst\' Moet minimaal ' . REVIEW_TEXT_MIN_LENGTH . ' karakters zijn.\n');
define('JS_REVIEW_RATING', '* Je moet het product een waardering geven voor de review.\n');

define('JS_GENDER', '* Het \'Geslacht\' moet gekozen worden.\n');
define('JS_FIRST_NAME', '* De \'Voornaam\' moet minstens ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' karakters zijn.\n');
define('JS_LAST_NAME', '* De \'Achternaam\' moet minstens ' . ENTRY_LAST_NAME_MIN_LENGTH . ' karakters zijn.\n');
define('JS_DOB', '* De \'Geboortedatum\' moet in het: xx/xx/xxxx (dag/maand/year) formaat zijn.\n');
define('JS_EMAIL_ADDRESS', '* Het \'E-Mail Adres\' moet minstens ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' karakters zijn.\n');
define('JS_ADDRESS', '* De \'Straatnaam\' moet minstens ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' karakters zijn.\n');
define('JS_POST_CODE', '* De \'Postcode\' moet minstens ' . ENTRY_POSTCODE_MIN_LENGTH . ' karakters zijn.\n');
define('JS_CITY', '* De \'Plaatsnaam\' moet minstens ' . ENTRY_CITY_MIN_LENGTH . ' karakters zijn.\n');
define('JS_STATE', '* De \'Provincie\' moet geselecteerd worden.\n');
define('JS_COUNTRY', '* Het \'Land\' moet geselecteerd worden.\n');
define('JS_TELEPHONE', '* Het \'Telefoonnummer\' moet minstens ' . ENTRY_TELEPHONE_MIN_LENGTH . ' karakters.\n');
define('JS_PASSWORD', '* Het \'Wachtwoord\' en \'Bevestiging\' moeten gelijk zijn and moeten minstens ' . ENTRY_PASSWORD_MIN_LENGTH . ' karakters bevatten.\n');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Selecteer de wijze van betaling voor uw order.\n');
define('JS_ERROR_SUBMITTED', 'Dit formulier is al verstuurd. Klik op OK en wacht tot de verwerking van deze order gedaan is.');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Selecteer de wijze van betaling voor uw bestelling.');

define('CATEGORY_COMPANY', 'Bedrijfs gegevens');
define('CATEGORY_PERSONAL', 'Persoonlijke gegevens');
define('CATEGORY_ADDRESS', 'Uw Adres');
define('CATEGORY_CONTACT', 'Contact Informatie');
define('CATEGORY_OPTIONS', 'Opties');
define('CATEGORY_PASSWORD', 'Het wachtwoord');
define('ENTRY_COMPANY', 'Bedrijfsnaam:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Geslacht:');
define('ENTRY_GENDER_ERROR', '&nbsp;<small><font color="#AABBDD">verplicht</font></small>');
define('ENTRY_GENDER_TEXT', '&nbsp;<small><font color="#AABBDD">verplicht</font></small>');
define('ENTRY_FIRST_NAME', 'Voornaam:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<small><font color="#FF0000">min ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' karakters</font></small>');
define('ENTRY_FIRST_NAME_TEXT', '&nbsp;<small><font color="#AABBDD">required</font></small>');
define('ENTRY_LAST_NAME', 'Achternaam:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<small><font color="#FF0000">min ' . ENTRY_LAST_NAME_MIN_LENGTH . ' karakters</font></small>');
define('ENTRY_LAST_NAME_TEXT', '&nbsp;<small><font color="#AABBDD">verplicht</font></small>');
define('ENTRY_DATE_OF_BIRTH', 'Geboortedatum:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<small><font color="#FF0000">(bv. 24/12/1970)</font></small>');
define('ENTRY_DATE_OF_BIRTH_TEXT', '&nbsp;<small>(bv. 24/12/1970) <font color="#AABBDD">verplicht</font></small>');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail Adres:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<small><font color="#FF0000">min ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' karakters</font></small>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<small><font color="#FF0000">Geef a.u.b. een bestaand e-mail adres!</font></small>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<small><font color="#FF0000">Het e-mail adres bestaat al!</font></small>');
define('ENTRY_EMAIL_ADDRESS_TEXT', '&nbsp;<small><font color="#AABBDD">verplicht</font></small>');
define('ENTRY_STREET_ADDRESS', 'Straatnaam:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<small><font color="#FF0000">min ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' karakters</font></small>');
define('ENTRY_STREET_ADDRESS_TEXT', '&nbsp;<small><font color="#AABBDD">verplicht</font></small>');
define('ENTRY_SUBURB', 'Wijk:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Postcode:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<small><font color="#FF0000">min ' . ENTRY_POSTCODE_MIN_LENGTH . ' karakters</font></small>');
define('ENTRY_POST_CODE_TEXT', '&nbsp;<small><font color="#AABBDD">verplicht</font></small>');
define('ENTRY_CITY', 'Plaats:');
define('ENTRY_CITY_ERROR', '&nbsp;<small><font color="#FF0000">min ' . ENTRY_CITY_MIN_LENGTH . ' karakters</font></small>');
define('ENTRY_CITY_TEXT', '&nbsp;<small><font color="#AABBDD">verplicht</font></small>');
define('ENTRY_STATE', 'Provincie:');
define('ENTRY_STATE_ERROR', '&nbsp;<small><font color="#FF0000">verplicht</font></small>');
define('ENTRY_STATE_TEXT', '&nbsp;<small><font color="#AABBDD">verplicht</font></small>');
define('ENTRY_STATE_ERROR_SELECT', 'Selecteer a.u.b. een provincie uit het pull down menu.');
define('ENTRY_COUNTRY', 'Land:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_COUNTRY_TEXT', '&nbsp;<small><font color="#AABBDD">verplicht</font></small>');
define('ENTRY_TELEPHONE_NUMBER', 'Telefoonnummer:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<small><font color="#FF0000">min ' . ENTRY_TELEPHONE_MIN_LENGTH . ' karakters</font></small>');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '&nbsp;<small><font color="#AABBDD">verplicht</font></small>');
define('ENTRY_FAX_NUMBER', 'Faxnummer:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Nieuwsbrief:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'ingeschrijven');
define('ENTRY_NEWSLETTER_NO', 'uitschrijven');
define('ENTRY_NEWSLETTER_ERROR', '');
define('ENTRY_PASSWORD', 'Wachtwoord:');
define('ENTRY_PASSWORD_CONFIRMATION', 'Wachtwoord Bevestigen:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '&nbsp;<small><font color="#AABBDD">verplicht</font></small>');
define('ENTRY_PASSWORD_ERROR', '&nbsp;<small><font color="#FF0000">min ' . ENTRY_PASSWORD_MIN_LENGTH . ' karakters</font></small>');
define('ENTRY_PASSWORD_TEXT', '&nbsp;<small><font color="#AABBDD">verplicht</font></small>');
define('PASSWORD_HIDDEN', '--HIDDEN--');

define('FORM_REQUIRED_INFORMATION', '* Verplicht veld ');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Result Pages:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Porduct <b>%d</b> tot <b>%d</b> (van <b>%d</b> producten)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Bestelling <b>%d</b> tot <b>%d</b> (van <b>%d</b> bestellingen)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Review <b>%d</b> to <b>%d</b> (of <b>%d</b> reviews)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Nieuw product <b>%d</b> to <b>%d</b> (of <b>%d</b> nieuwe producten)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Aanbieding <b>%d</b> to <b>%d</b> (of <b>%d</b> aanbieding)');

define('PREVNEXT_TITLE_FIRST_PAGE', 'Eerste Pagina');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Vorige Pagina');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Volgende Pagina');
define('PREVNEXT_TITLE_LAST_PAGE', 'Laatste Pagina');
define('PREVNEXT_TITLE_PAGE_NO', 'Pagina %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Vorige Set van %d Pagina\'s');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Volgende Set van %d Pagina\'s');
define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;Eerste');
define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;Vorige]');
define('PREVNEXT_BUTTON_NEXT', '[Volgende&nbsp;&gt;&gt;]');
define('PREVNEXT_BUTTON_LAST', 'Laatste&gt;&gt;');

define('IMAGE_BUTTON_ADD_ADDRESS', 'Adres Toevoegen');
define('IMAGE_BUTTON_ADDRESS_BOOK', 'Adresboek');
define('IMAGE_BUTTON_BACK', 'Terug');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Adres vernaderen');
define('IMAGE_BUTTON_CHECKOUT', 'Afrekenen');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Bevestigen');
define('IMAGE_BUTTON_CONTINUE', 'Ga verder');
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Winkel verder');
define('IMAGE_BUTTON_DELETE', 'Verwijderen');
define('IMAGE_BUTTON_EDIT_ACCOUNT', 'Bewerk Account');
define('IMAGE_BUTTON_HISTORY', 'Bestel Geschiedenis');
define('IMAGE_BUTTON_LOGIN', 'Inloggen');
define('IMAGE_BUTTON_IN_CART', 'In de Winkelwagen');
define('IMAGE_BUTTON_NOTIFICATIONS', 'Notificaties');
define('IMAGE_BUTTON_QUICK_FIND', 'Snel Zoeken');
define('IMAGE_BUTTON_REMOVE_NOTIFICATIONS', 'Verwijder Notificaties');
define('IMAGE_BUTTON_REVIEWS', 'Reviews');
define('IMAGE_BUTTON_SEARCH', 'Zoeken');
define('IMAGE_BUTTON_SHIPPING_OPTIONS', 'Verzend Opties');
define('IMAGE_BUTTON_TELL_A_FRIEND', 'Vertel een vriend');
define('IMAGE_BUTTON_UPDATE', 'Update');
define('IMAGE_BUTTON_UPDATE_CART', 'Update Winkelwagen');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Schrijf Review');

define('ICON_ARROW_RIGHT', 'meer');
define('ICON_CART', 'In de Winkelwagen');
define('ICON_WARNING', 'Waarschuwing');

define('TEXT_GREETING_PERSONAL', 'Welkom terug <span class="greetUser">%s!</span> Wil je de <a href="%s"><u>nieuwe producten</u></a> zien?');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>Als u niet %s bent, <a href="%s"><u>log uzelf in</u></a> met u account informatie.</small>');
define('TEXT_GREETING_GUEST', 'Welkom <span class="greetUser">Gast!</span> Wilt u <a href="%s"><u>inloggen</u></a>? Of wilt u een nieuw account <a href="%s"><u>aanmaken</u></a>? Alleen met een account kunt u dingen bestellen.');

define('TEXT_SORT_PRODUCTS', 'Sorteer producten ');
define('TEXT_DESCENDINGLY', 'aflopend');
define('TEXT_ASCENDINGLY', 'oplopend');
define('TEXT_BY', ' by ');

define('TEXT_REVIEW_BY', 'bij %s');
define('TEXT_REVIEW_WORD_COUNT', '%s woorden');
define('TEXT_REVIEW_RATING', 'Waardering: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Datum Toegevoegd: %s');
define('TEXT_NO_REVIEWS', 'Er zijn geen product reviews.');

define('TEXT_NO_NEW_PRODUCTS', 'Er zijn geen nieuwe products.');

define('TEXT_UNKNOWN_TAX_RATE', 'Onbekend belastingstarief');

define('ERROR_TEP_MAIL', '<font face="Verdana, Arial" size="2" color="#ff0000"><b><small>TEP ERROR:</small> Kan de email niet via de opgegeven SMTP server versturen. Controleer de php.ini instellingen en maak eventueel de nodige aanpassingen.</b></font>');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Waarschuwing: Installatie directory bestaat nog: ' . dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/install. Verwijder deze directory voor veiligheids overwegingen.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Warning: Ik kan het configuratie bstand: ' . dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/includes/configure.php beschrijven. Dit is een potentieel risico - Stel de user permissies goed in.');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Waarschuwing: De sessies directory bestaat niet: ' . tep_session_save_path() . '. Sessies zullen niet werken totdat de directory is aangemaakt.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Waarschuwing: Ik kan niet naar de sessies directory schrijven: ' . tep_session_save_path() . '. Sessies zullen niet werken totdat de user permissies goed zijn gezet.');
define('WARNING_SESSION_AUTO_START', 'Waarschuwing: session.auto_start staat aan - zet deze uit in php.ini en hetstart de web server.');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Waarschuwing: De download producten directory bestaat niet: ' . DIR_FS_DOWNLOAD . '. Download producten zal niet werken totdat deze directory is aangemaakt.');

define('TEXT_CCVAL_ERROR_INVALID_DATE', 'De verloop datum ingevult voor de credit card is ongeldig.<br>Controleer de datum en probeer opnieuw.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Het credit card nummer ingevult is ongeldig.<br>Controleer het nummer en probeer opnieuw.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'De eerste vier ingevulde nummer van de credit card zijn: %s<br>Als dit correct is, dan accepteren wij dit type credit card niet.<br>Als het niet klopt, probeer het opnieuw.');

/*
  The following copyright announcement can only be
  appropriately modified or removed if the layout of
  the site theme has been modified to distinguish
  itself from the default osCommerce-copyrighted
  theme.

  For more information please read the following
  Frequently Asked Questions entry on the osCommerce
  support site:

  http://www.oscommerce.com/community.php/faq,26/q,50

  Please leave this comment intact together with the
  following copyright announcement.
*/
define('FOOTER_TEXT_BODY', 'Copyright &copy; 2002 <a href="http://www.oscommerce.com" target="_blank">osCommerce</a><br>Powered by <a href="http://www.oscommerce.com" target="_blank">osCommerce</a>');
?>