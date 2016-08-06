<?php
/**
 * Gothick reCAPTCHA 2.0
 *
 * @package phpBB Extension - reCAPTCHA 2.0
 * @copyright (c) 2015 Matt Gibson Creative Ltd.
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'GOTHICK_RECAPTCHA2_LANG'					=> 'pl', // Use https://developers.google.com/recaptcha/docs/language
	'GOTHICK_RECAPTCHA2_NOT_AVAILABLE'			=> 'Aby używać reCapcha 2.0 musisz stworzyć konto na <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2'						=> 'reCaptcha 2.0',
	// TODO: Hard to pin this down, as reCAPTCHA may have asked them to tick a box, enter a code, identify some pasta, so forth.
	// For now, keep it general. Improve wording. Or see if Google passes back a less generic error message.
	'GOTHICK_RECAPTCHA2_INCORRECT'				=> 'Wymagane jest sprawdzenie czy jesteś człowiekiem.',

	// Keys
	'GOTHICK_RECAPTCHA2_SITEKEY'				=> 'reCaptcha site key',
	'GOTHICK_RECAPTCHA2_SITEKEY_EXPLAIN'		=> 'Twój publiczny klucz reCaptcha. Klucze można wygenerować na <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2_SECRETKEY'				=> 'reCaptcha secret key',
	'GOTHICK_RECAPTCHA2_SECRETKEY_EXPLAIN'		=> 'Twój prywatny klucz reCaptcha. Klucze można wygenerować na <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'GOTHICK_RECAPTCHA2_CONFIRM_EXPLAIN'		=> 'Aby zapobiec automatycznym rejestracjom musisz potwierdzić, że jesteś człowiekiem. W razie problemów, należy skontaktować się z %sadministratorem%s.',
	'GOTHICK_RECAPTCHA2_POST_CONFIRM_EXPLAIN' 	=> 'Aby zapobiec automatycznym rejestracjom musisz potwierdzić, że jesteś człowiekiem. W razie problemów, należy skontaktować się z %sadministratorem%s.',

	'GOTHICK_RECAPTCHA2_CONFIRM_HUMAN'			=> 'Potwierdź że jesteś człowiekiem',
	'GOTHICK_RECAPTCHA2_EXPLAIN'				=> 'Aby zapobiec automatycznym rejestracjom musisz potwerdzić że jesteś człowiekiem używając usługi Google reCAPTCHA.',
	'GOTHICK_RECAPTCHA2_NOSCRIPT'				=> 'Musisz włączyć obsługę JavaScript w swojej przeglądarce.',
	// TODO if necessary. We may just want to pass back dynamic messages from exceptions thrown from the reCAPTCHA library, its own specific responses, etc.
	'GOTHICK_RECAPTCHA2_EXCEPTION'				=> 'Wystąpił błąd podczas próby połączenie z usługą reCAPTCHA. Spóbuj ponownie później.',
));
