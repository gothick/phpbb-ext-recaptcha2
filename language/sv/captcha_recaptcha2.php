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
	'GOTHICK_RECAPTCHA2_LANG'					=> 'sv', // Use https://developers.google.com/recaptcha/docs/language
	'GOTHICK_RECAPTCHA2_NOT_AVAILABLE'			=> 'För att kunna använda reCaptcha måste du skapa ett konto på <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2'						=> 'reCaptcha 2.0',
	// TODO: Hard to pin this down, as reCAPTCHA may have asked them to tick a box, enter a code, identify some pasta, so forth.
	// For now, keep it general. Improve wording. Or see if Google passes back a less generic error message.
	'GOTHICK_RECAPTCHA2_INCORRECT'				=> 'Du angav fel svar för reCAPTCHA',

	// Keys
	'GOTHICK_RECAPTCHA2_SITEKEY'				=> 'Webbplatsnyckel för reCaptcha',
	'GOTHICK_RECAPTCHA2_SITEKEY_EXPLAIN'		=> 'Din publika webbplatsnyckel för reCaptcha. Nycklar kan erhållas på <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2_SECRETKEY'				=> 'Hemlig nyckel för reCaptcha',
	'GOTHICK_RECAPTCHA2_SECRETKEY_EXPLAIN'		=> 'Din hemliga nyckel för reCaptcha. Nycklar kan erhållas på <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'GOTHICK_RECAPTCHA2_CONFIRM_EXPLAIN'		=> 'För att förhindra automatiska registreringar kräver vi att du bekräfta att du är en människa. Om du har dålig syn eller av annan orsak inte kan fylla i nedanstående  uppgift kontakta %sForumadministratören%s.',
	'GOTHICK_RECAPTCHA2_POST_CONFIRM_EXPLAIN' 	=> 'För att förhindra automatiserade inlägg kräver vi att du bekräfta att du är en människa. Om du har dålig syn eller av annan orsak inte kan fylla i nedanstående  uppgift kontakta %sForumadministratören%s.',

	'GOTHICK_RECAPTCHA2_CONFIRM_HUMAN'			=> 'Vänligen bekräfta att du är mäniska',
	'GOTHICK_RECAPTCHA2_EXPLAIN'				=> 'För att förhindra automatiska inlägg kräver vi att du bekräftar att du är en mäniska genom att använda Googles reCAPTCHA-tjänst.',
	'GOTHICK_RECAPTCHA2_NOSCRIPT'				=> 'Du måste tillåta JavaScript i din webbläsare för att fullfölja reCAPTCHA',
	// TODO if necessary. We may just want to pass back dynamic messages from exceptions thrown from the reCAPTCHA library, its own specific responses, etc.
	'GOTHICK_RECAPTCHA2_EXCEPTION'				=> 'Det blev ett allmänt fel kopplat till reCAPTCHA-tjänsten: %1$s. Prova igen senare.',
));
