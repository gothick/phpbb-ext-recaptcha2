<?php
/**
 * Gothick reCAPTCHA 2.0
 *
 * @package phpBB Extension - reCAPTCHA 2.0
 * @copyright (c) 2015 Matt Gibson Creative Ltd.
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * @German translation by MAGIC - kthx.at
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
	'GOTHICK_RECAPTCHA2_LANG'					=> 'de', // Siehe https://developers.google.com/recaptcha/docs/language
	'GOTHICK_RECAPTCHA2_NOT_AVAILABLE'			=> 'Um reCaptcha zu benutzen, musst du einen Account auf <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> besitzen.',
	'GOTHICK_RECAPTCHA2'						=> 'reCaptcha 2.0',
	// TODO: Hard to pin this down, as reCAPTCHA may have asked them to tick a box, enter a code, identify some pasta, so forth.
	// For now, keep it general. Improve wording. Or see if Google passes back a less generic error message.
	'GOTHICK_RECAPTCHA2_INCORRECT'				=> 'Ein falscher reCAPTCHA Code wurde eingegeben',

	// Keys
	'GOTHICK_RECAPTCHA2_SITEKEY'				=> 'reCaptcha Seitenschlüssel',
	'GOTHICK_RECAPTCHA2_SITEKEY_EXPLAIN'		=> 'Dein öffentlicher reCaptcha Seitenschlüssel. Diesen Schlüssel kann man auf <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> anfordern.',
	'GOTHICK_RECAPTCHA2_SECRETKEY'				=> 'reCaptcha Privatschlüssel',
	'GOTHICK_RECAPTCHA2_SECRETKEY_EXPLAIN'		=> 'Dein privater reCaptcha Seitenschlüssel. Diesen Schlüssel kann man auf <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> anfordern.',

	'GOTHICK_RECAPTCHA2_CONFIRM_EXPLAIN'		=> 'Um automatische Registrierungen zu verhinden, müssen Sie bestätigen, dass Sie ein Mensch sind. Falls Sie sehbehindert oder können wegen anderen Umständen diese Aufgabe nicht bewältigen, kontaktieren Sie bitte den %sBoard Administrator%s.',
	'GOTHICK_RECAPTCHA2_POST_CONFIRM_EXPLAIN' 	=> 'Um automatische Postings zu verhinden, müssen Sie bestätigen, dass Sie ein Mensch sind. Falls Sie sehbehindert oder können wegen anderen Umständen diese Aufgabe nicht bewältigen, kontaktieren Sie bitte den %sBoard Administrator%s.',

	'GOTHICK_RECAPTCHA2_CONFIRM_HUMAN'			=> 'Bitte bestätigen Sie, dass Sie ein Mensch sind.',
	'GOTHICK_RECAPTCHA2_EXPLAIN'				=> 'Um diesen Dienst zu benutzen, müssen sie bestätigen, dass Sie ein Mensch sind.',
	'GOTHICK_RECAPTCHA2_NOSCRIPT'				=> 'Du musst JavaScript in deinem Browser aktivieren, um reCAPTCHA zu benutzen.',
	// TODO if necessary. We may just want to pass back dynamic messages from exceptions thrown from the reCAPTCHA library, its own specific responses, etc.
	'GOTHICK_RECAPTCHA2_EXCEPTION'				=> 'Es ist ein Verbindungsfehler zu dem reCAPTCHA Service aufgetreten: %1$s. Bitte versuchen Sie es später.',
));
