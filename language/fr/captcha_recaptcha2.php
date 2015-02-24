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
	'GOTHICK_RECAPTCHA2_LANG'					=> 'fr', // Use https://developers.google.com/recaptcha/docs/language
	'GOTHICK_RECAPTCHA2_NOT_AVAILABLE'			=> 'Afin d’utiliser reCAPTCHA, vous devez créer un compte sur <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2'						=> 'reCaptcha 2.0',
	// TODO: Hard to pin this down, as reCAPTCHA may have asked them to tick a box, enter a code, identify some pasta, so forth.
	// For now, keep it general. Improve wording. Or see if Google passes back a less generic error message.
	'GOTHICK_RECAPTCHA2_INCORRECT'				=> 'Le code de confirmation visuelle soumis était incorrect',

	// Keys
	'GOTHICK_RECAPTCHA2_SITEKEY'				=> 'Clé publique reCAPTCHA',
	'GOTHICK_RECAPTCHA2_SITEKEY_EXPLAIN'		=> 'Votre clé publique reCAPTCHA. Des clés peuvent être obtenues sur <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2_SECRETKEY'				=> 'Clé privée reCAPTCHA',
	'GOTHICK_RECAPTCHA2_SECRETKEY_EXPLAIN'		=> 'Votre clé privée reCAPTCHA. Des clés peuvent être obtenues sur <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'GOTHICK_RECAPTCHA2_CONFIRM_EXPLAIN'		=> 'Afin d’empêcher les créations de comptes automatisées, le forum vous demande de confirmer que vous êtes un humain. Si vous n’avez pas la faculté ou la possibilité d’effectuer la tâche ci-dessous, veuillez contacter l’%sadministrateur du forum%s.',
	'GOTHICK_RECAPTCHA2_POST_CONFIRM_EXPLAIN' 	=> 'Afin d’empêcher les publications de messages automatisées, le forum vous demande de confirmer que vous êtes un humain. Si vous n’avez pas la faculté ou la possibilité d’effectuer la tâche ci-dessous, veuillez contacter l’%sadministrateur du forum%s.',

	'GOTHICK_RECAPTCHA2_CONFIRM_HUMAN'			=> 'Veuillez confirmer que vous êtes un humain',
	'GOTHICK_RECAPTCHA2_EXPLAIN'				=> 'Afin d’empêcher les requêtes de robots automatisées, nous vous demandons de confirmer que vous êtes un humain en utilisant le service reCAPTCHA de Google.',
	'GOTHICK_RECAPTCHA2_NOSCRIPT'				=> 'Vous devez activer le JavaScript dans votre navigateur pour compléter le reCAPTCHA',
	// TODO if necessary. We may just want to pass back dynamic messages from exceptions thrown from the reCAPTCHA library, its own specific responses, etc.
	'GOTHICK_RECAPTCHA2_EXCEPTION'				=> 'Problème de connexion au service reCAPTCHA : %1$s. Réessayez plus tard.',
));
