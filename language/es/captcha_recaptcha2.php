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
	'GOTHICK_RECAPTCHA2_LANG'					=> 'es', // Use https://developers.google.com/recaptcha/docs/language
	'GOTHICK_RECAPTCHA2_NOT_AVAILABLE'			=> 'Para usar reCaptchqa debes crear una cuenta en <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2'						=> 'reCaptcha 2.0',
	// TODO: Hard to pin this down, as reCAPTCHA may have asked them to tick a box, enter a code, identify some pasta, so forth.
	// For now, keep it general. Improve wording. Or see if Google passes back a less generic error message.
	'GOTHICK_RECAPTCHA2_INCORRECT'				=> 'El reCAPTCHA es incorrecto',

	// Keys
	'GOTHICK_RECAPTCHA2_SITEKEY'				=> 'Clave pública de reCaptcha',
	'GOTHICK_RECAPTCHA2_SITEKEY_EXPLAIN'		=> 'Tu clave pública de reCaptcha. Las claves pueden consultarse en<a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2_SECRETKEY'				=> 'Clave privada de reCaptcha',
	'GOTHICK_RECAPTCHA2_SECRETKEY_EXPLAIN'		=> 'Tu clave privada de reCaptcha puede consultarse en <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'GOTHICK_RECAPTCHA2_CONFIRM_EXPLAIN'		=> 'Para evitar registros automáticos el foro necesita confirmar que eres una persona. Si tienes deficiencias visuales o por otro motivo no puedes completar el captcha por favor contacta a la %sBoard Administrator%s.',
	'GOTHICK_RECAPTCHA2_POST_CONFIRM_EXPLAIN' 	=> 'Para evitar posts automáticos el foro necesita confirmar que eres una persona. Si tienes deficiencias viusales o por otro motivo no puedes confirmar el captcha por favor contacta a la %sBoard Administrator%s.',

	'GOTHICK_RECAPTCHA2_CONFIRM_HUMAN'			=> 'Confirma que eres una persona',
	'GOTHICK_RECAPTCHA2_EXPLAIN'				=> 'Por tal de evitar comentarios automatizados necesitamos que confirmes que eres una persona a través del servicio reCAPTCHA de Google.',
	'GOTHICK_RECAPTCHA2_NOSCRIPT'				=> 'You must enable JavaScript in your browser to complete the reCAPTCHA',
	// TODO if necessary. We may just want to pass back dynamic messages from exceptions thrown from the reCAPTCHA library, its own specific responses, etc.
	'GOTHICK_RECAPTCHA2_EXCEPTION'				=> 'Hubo un error accediendo al servicio de reCAPTCHA: %1$s. Prueba más tarde.',
));
