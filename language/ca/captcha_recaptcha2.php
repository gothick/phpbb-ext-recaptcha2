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
	'GOTHICK_RECAPTCHA2_LANG'					=> 'ca', // Use https://developers.google.com/recaptcha/docs/language
	'GOTHICK_RECAPTCHA2_NOT_AVAILABLE'			=> 'Per a usar el reCaptcha cal enregistar un compte a <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2'						=> 'reCaptcha 2.0',
	// TODO: Hard to pin this down, as reCAPTCHA may have asked them to tick a box, enter a code, identify some pasta, so forth.
	// For now, keep it general. Improve wording. Or see if Google passes back a less generic error message.
	'GOTHICK_RECAPTCHA2_INCORRECT'				=> 'El reCAPTCHA es incorrect',

	// Keys
	'GOTHICK_RECAPTCHA2_SITEKEY'				=> 'Clau pública de reCaptcha',
	'GOTHICK_RECAPTCHA2_SITEKEY_EXPLAIN'		=> 'La seua clau pública de reCaptcha. Pot consultar les seues claus a <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2_SECRETKEY'				=> 'Clau privada de reCaptcha',
	'GOTHICK_RECAPTCHA2_SECRETKEY_EXPLAIN'		=> 'La clau privada de reCaptcha. Pot consultar les seues claus de reCaptcha a <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'GOTHICK_RECAPTCHA2_CONFIRM_EXPLAIN'		=> 'Per a evitar enregistraments automàtics cal que el foro confirme que vosté es una persona. Si pateix de problemes visuals o per qualsevol altre motiu no pot completar el captcha per favor contacte amb la %sBoard Administrator%s.',
	'GOTHICK_RECAPTCHA2_POST_CONFIRM_EXPLAIN' 	=> 'Per a evitar posts automàtics cal que el foro confirme que voste es una persona. Si pateix de problemes visuals o per qualsevol altre motiu no por confirmar el captcha per favor contacte amb la %sBoard Administrator%s.',

	'GOTHICK_RECAPTCHA2_CONFIRM_HUMAN'			=> 'Confirma que eres una persona',
	'GOTHICK_RECAPTCHA2_EXPLAIN'				=> 'Per tal de evitar comentaris automatitzats cal que confirme que vosté es una persona mitjançant el servei reCAPTCHA de Google.',
	'GOTHICK_RECAPTCHA2_NOSCRIPT'				=> 'Cal que active JavaScript al seu navegador per a completar el reCAPTCHA',
	// TODO if necessary. We may just want to pass back dynamic messages from exceptions thrown from the reCAPTCHA library, its own specific responses, etc.
	'GOTHICK_RECAPTCHA2_EXCEPTION'				=> 'Ha ocorregut un error accedint al servei de reCAPTCHA: %1$s. Intenta-ho mes tard.',
));
