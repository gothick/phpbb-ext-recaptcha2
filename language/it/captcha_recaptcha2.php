<?php
/**
 * Gothick reCAPTCHA 2.0
 *
 * @package phpBB Extension - reCAPTCHA 2.0
 * @copyright (c) 2015 Matt Gibson Creative Ltd. - traduzione italiana a cura di TurboLab.it
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
	'GOTHICK_RECAPTCHA2_LANG'					=> 'it', // Use https://developers.google.com/recaptcha/docs/language
	'GOTHICK_RECAPTCHA2_NOT_AVAILABLE'			=> 'Per utilizzare reCaptcha devi creare un account su <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2'						=> 'reCaptcha 2.0',
	// TODO: Hard to pin this down, as reCAPTCHA may have asked them to tick a box, enter a code, identify some pasta, so forth.
	// For now, keep it general. Improve wording. Or see if Google passes back a less generic error message.
	'GOTHICK_RECAPTCHA2_INCORRECT'				=> 'Il reCAPTCHA inviato è sbagliato',

	// Keys
	'GOTHICK_RECAPTCHA2_SITEKEY'				=> 'Chiave reCaptcha del sito',
	'GOTHICK_RECAPTCHA2_SITEKEY_EXPLAIN'		=> 'La chiave pubblica del sito. Le chiavi sono visualizzabili su <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2_SECRETKEY'				=> 'Chiave segreta reCaptcha ',
	'GOTHICK_RECAPTCHA2_SECRETKEY_EXPLAIN'		=> 'La chiave segreta reCaptcha del sito. Le chiavi sono visualizzabili su <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'GOTHICK_RECAPTCHA2_CONFIRM_EXPLAIN'		=> 'Per impedire registrazioni automatiche, è necessario dimostrare di essere un utente umano. Se sei ipovedente oppure non riesci a superare la prova, devi contattare gli amministratori.',
	'GOTHICK_RECAPTCHA2_POST_CONFIRM_EXPLAIN' 	=> 'Per impedire registrazioni automatiche, è necessario confermare che tu sia un umano. Se sei ipovedente oppure non riesci a superare la prova, devi contattare gli amministratori.',

	'GOTHICK_RECAPTCHA2_CONFIRM_HUMAN'			=> 'Conferma di essere un utente umano',
	'GOTHICK_RECAPTCHA2_EXPLAIN'				=> 'Risolvi la sfida generata dal servizio reCAPTCHA di Google.',
	'GOTHICK_RECAPTCHA2_NOSCRIPT'				=> 'È necessario abilitare JavaScript per completare la prova reCAPTCHA',
	// TODO if necessary. We may just want to pass back dynamic messages from exceptions thrown from the reCAPTCHA library, its own specific responses, etc.
	'GOTHICK_RECAPTCHA2_EXCEPTION'				=> 'Si è verificato un errore durante il collegamento al servizio reCAPTCHA service: %1$s. Riprovare più tardi.',
));
