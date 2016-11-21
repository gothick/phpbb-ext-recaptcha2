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
	'GOTHICK_RECAPTCHA2_LANG'					=> 'da', // Use https://developers.google.com/recaptcha/docs/language
	'GOTHICK_RECAPTCHA2_NOT_AVAILABLE'			=> 'For at du kan benytte reCaptcha, skal du først oprette en konto her <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2'						=> 'reCaptcha 2.0',
	// TODO: Hard to pin this down, as reCAPTCHA may have asked them to tick a box, enter a code, identify some pasta, so forth.
	// For now, keep it general. Improve wording. Or see if Google passes back a less generic error message.
	'GOTHICK_RECAPTCHA2_INCORRECT'				=> 'reCAPTCHAen du indtastede var ikke korrekt',

	// Keys
	'GOTHICK_RECAPTCHA2_SITEKEY'				=> 'reCaptcha site key',
	'GOTHICK_RECAPTCHA2_SITEKEY_EXPLAIN'		=> 'Din offentlige reCaptcha site key. Nøgler kan findes her <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2_SECRETKEY'				=> 'reCaptcha secret key',
	'GOTHICK_RECAPTCHA2_SECRETKEY_EXPLAIN'		=> 'Din hemmelige reCaptcha key. Nøgler kan findes her <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'GOTHICK_RECAPTCHA2_CONFIRM_EXPLAIN'		=> 'For at undgå automatiserede brugeroprettelser, kræver dette fora at du bekærfter at du er et menneske. Hvis du er synshæmmet, eller på anden måde ikke kan klare den nedenstående opgave, bedes du venligst kontake en adminstrator',
	'GOTHICK_RECAPTCHA2_POST_CONFIRM_EXPLAIN' 	=> 'For at undgå automatiserede opslag, kræver dette fora at du bekærfter at du er et menneske. Hvis du er synshæmmet, eller på anden måde ikke kan klare den nedenstående opgave, bedes du venligst kontake en adminstrator',

	'GOTHICK_RECAPTCHA2_CONFIRM_HUMAN'			=> 'Bekræft venligst, at du er et menneske',
	'GOTHICK_RECAPTCHA2_EXPLAIN'				=> 'For at undgå automatiske opslag, bedes du bekræfte at du er et menneske, ved hjælp af Googles reCAPTCHA service.',
	'GOTHICK_RECAPTCHA2_NOSCRIPT'				=> 'JavaScript skal være aktiveret i din browser, for at kunne benytte reCAPTCHA',
	// TODO if necessary. We may just want to pass back dynamic messages from exceptions thrown from the reCAPTCHA library, its own specific responses, etc.
	'GOTHICK_RECAPTCHA2_EXCEPTION'				=> 'Der er opstået en generel fejl, i forsøget på at forbinde til reCAPTCHA servicen: %1$s. Prøv igen senere.',
));
