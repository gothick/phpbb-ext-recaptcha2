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
	'GOTHICK_RECAPTCHA2_LANG'					=> 'nl', // Use https://developers.google.com/recaptcha/docs/language
	'GOTHICK_RECAPTCHA2_NOT_AVAILABLE'			=> 'Om reCaptcha te gebruiken heb je een <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> account nodig.',
	'GOTHICK_RECAPTCHA2'						=> 'reCaptcha 2.0',
	// TODO: Hard to pin this down, as reCAPTCHA may have asked them to tick a box, enter a code, identify some pasta, so forth.
	// For now, keep it general. Improve wording. Or see if Google passes back a less generic error message.
	'GOTHICK_RECAPTCHA2_INCORRECT'				=> 'De reCaptcha je invoerde was incorrect',

	// Keys
	'GOTHICK_RECAPTCHA2_SITEKEY'				=> 'reCaptcha site key',
	'GOTHICK_RECAPTCHA2_SITEKEY_EXPLAIN'		=> 'Je publieke reCaptcha, deze kun je hier verkrijgen: <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2_SECRETKEY'				=> 'reCaptcha secret key',
	'GOTHICK_RECAPTCHA2_SECRETKEY_EXPLAIN'		=> 'Je geheime reCaptcha, deze kun je hier verkrijgen: <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'GOTHICK_RECAPTCHA2_CONFIRM_EXPLAIN'		=> 'Om automatische registraties te voorkomen dien je deze captcha te voltooien, wanneer je deze om welke reden niet kunt voltooien contacteer je de %sforumbeheerder%s.',
	'GOTHICK_RECAPTCHA2_POST_CONFIRM_EXPLAIN' 	=> 'Om automatische (spam)berichten te voorkomen dien je deze captcha te voltooien, wanneer je deze om welke reden niet kunt voltooien contacteer je de %sforumbeheerder%s.',

	'GOTHICK_RECAPTCHA2_CONFIRM_HUMAN'			=> 'Geef alsjeblieft aan dat je een mens bent',
	'GOTHICK_RECAPTCHA2_EXPLAIN'				=> 'Om automatische registraties te voorkomen geef je aan dat je een mens bent door middel van Google’s reCAPTCHA service.',
	'GOTHICK_RECAPTCHA2_NOSCRIPT'				=> 'Je hebt JavaScript nodig in je browser om reCAPTCHA te kunnen uitvoeren',
	// TODO if necessary. We may just want to pass back dynamic messages from exceptions thrown from the reCAPTCHA library, its own specific responses, etc.
	'GOTHICK_RECAPTCHA2_EXCEPTION'				=> 'Er was een algemene fout naar de reCAPTCHA service: %1$s. Probeer het later opnieuw.',
));
