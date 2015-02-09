<?php
/**
 * Gothick New reCAPTCHA
 *
 * @package phpBB Extension - New reCAPTCHA
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'GOTHICK_NEWRECAPTCHA_LANG'					=> 'en', // Use https://developers.google.com/recaptcha/docs/language
	'GOTHICK_NEWRECAPTCHA_NOT_AVAILABLE'		=> 'In order to use reCaptcha, you must create an account on <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_NEWRECAPTCHA'						=> 'reCaptcha 2.0',
	// TODO: Hard to pin this down, as reCAPTCHA may have asked them to tick a box, enter a code, identify some pasta, so forth.
	// For now, keep it general. Improve wording. Or see if Google passes back a less generic error message.
	'GOTHICK_NEWRECAPTCHA_INCORRECT'			=> 'The reCAPTCHA you submitted was incorrect',

	// Keys
	'GOTHICK_NEWRECAPTCHA_SITEKEY'				=> 'reCaptcha site key',
	'GOTHICK_NEWRECAPTCHA_SITEKEY_EXPLAIN'		=> 'Your public reCaptcha site key. Keys can be obtained on <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_NEWRECAPTCHA_SECRETKEY'			=> 'reCaptcha secret key',
	'GOTHICK_NEWRECAPTCHA_SECRETKEY_EXPLAIN'	=> 'Your secret reCaptcha key. Keys can be obtained on <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'GOTHICK_RECAPTCHA_CONFIRM_EXPLAIN'			=> 'To prevent automated registrations the board requires you to confirm that you are a human. If you are visually impaired or cannot otherwise complete the below task please contact the %sBoard Administrator%s.',
	'GOTHICK_RECAPTCHA_POST_CONFIRM_EXPLAIN' 	=> 'To prevent automated posts the board requires you to confirm that you are a human. If you are visually impaired or cannot otherwise complete the below task, please contact the %sBoard Administrator%s.',

	'GOTHICK_NEWRECAPTCHA_CONFIRM_HUMAN'		=> 'Please confirm that you’re human',
	'GOTHICK_NEWRECAPTCHA_EXPLAIN'				=> 'In an effort to prevent automatic submissions, we require that you confirm you’re human using Google’s reCAPTCHA sservice.',
	'GOTHICK_NEWRECAPTCHA_NOSCRIPT'				=> 'You must enable JavaScript in your browser to complete the reCAPTCHA',
	// TODO if necessary. We may just want to pass back dynamic messages from exceptions thrown from the reCAPTCHA library, its own specific responses, etc.
	'RECAPTCHA_SOCKET_ERROR'		=> 'There was a problem connecting to the reCAPTCHA service: could not open socket. Try again later.',
));
