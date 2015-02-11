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
	'GOTHICK_RECAPTCHA2_LANG'					=> 'en', // Use https://developers.google.com/recaptcha/docs/language
	'GOTHICK_RECAPTCHA2_NOT_AVAILABLE'			=> 'In order to use reCaptcha, you must create an account on <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2'						=> 'reCaptcha 2.0',
	// TODO: Hard to pin this down, as reCAPTCHA may have asked them to tick a box, enter a code, identify some pasta, so forth.
	// For now, keep it general. Improve wording. Or see if Google passes back a less generic error message.
	'GOTHICK_RECAPTCHA2_INCORRECT'				=> 'The reCAPTCHA you submitted was incorrect',

	// Keys
	'GOTHICK_RECAPTCHA2_SITEKEY'				=> 'reCaptcha site key',
	'GOTHICK_RECAPTCHA2_SITEKEY_EXPLAIN'		=> 'Your public reCaptcha site key. Keys can be obtained on <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2_SECRETKEY'				=> 'reCaptcha secret key',
	'GOTHICK_RECAPTCHA2_SECRETKEY_EXPLAIN'		=> 'Your secret reCaptcha key. Keys can be obtained on <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'GOTHICK_RECAPTCHA2_CONFIRM_EXPLAIN'		=> 'To prevent automated registrations the board requires you to confirm that you are a human. If you are visually impaired or cannot otherwise complete the below task please contact the %sBoard Administrator%s.',
	'GOTHICK_RECAPTCHA2_POST_CONFIRM_EXPLAIN' 	=> 'To prevent automated posts the board requires you to confirm that you are a human. If you are visually impaired or cannot otherwise complete the below task, please contact the %sBoard Administrator%s.',

	'GOTHICK_RECAPTCHA2_CONFIRM_HUMAN'			=> 'Please confirm that you’re human',
	'GOTHICK_RECAPTCHA2_EXPLAIN'				=> 'In an effort to prevent automatic submissions, we require that you confirm you’re human using Google’s reCAPTCHA service.',
	'GOTHICK_RECAPTCHA2_NOSCRIPT'				=> 'You must enable JavaScript in your browser to complete the reCAPTCHA',
	// TODO if necessary. We may just want to pass back dynamic messages from exceptions thrown from the reCAPTCHA library, its own specific responses, etc.
	'GOTHICK_RECAPTCHA2_EXCEPTION'				=> 'There was a general error connecting to the reCAPTCHA service: %1$s. Try again later.',
));
