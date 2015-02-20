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
	'GOTHICK_RECAPTCHA2_LANG'					=> 'ru', // Use https://developers.google.com/recaptcha/docs/language
	'GOTHICK_RECAPTCHA2_NOT_AVAILABLE'			=> 'Для того, чтобы использовать reCaptcha, вы должны создать аккаунт на этом сайте <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2'						=> 'reCaptcha 2.0',
	// TODO: Hard to pin this down, as reCAPTCHA may have asked them to tick a box, enter a code, identify some pasta, so forth.
	// For now, keep it general. Improve wording. Or see if Google passes back a less generic error message.
	'GOTHICK_RECAPTCHA2_INCORRECT'				=> 'reCAPTCHA которую вы указали неверна',

	// Keys
	'GOTHICK_RECAPTCHA2_SITEKEY'				=> 'Публичный ключ reCaptcha (ключ сайта)',
	'GOTHICK_RECAPTCHA2_SITEKEY_EXPLAIN'		=> 'reCaptcha публичный ключ сайта. Этот ключ можно получить на сайте <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2_SECRETKEY'				=> 'reCaptcha секретный ключ',
	'GOTHICK_RECAPTCHA2_SECRETKEY_EXPLAIN'		=> 'Секретный ключ reCaptcha . Этот ключ можно получить на сайте <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'GOTHICK_RECAPTCHA2_CONFIRM_EXPLAIN'		=> 'В целях предотвращения автоматических действий, пожалуйста подтвердите что вы человек. Если у вас есть трудности с возможностью ввода кода либо какие-то другие проблемы, пожалуйста свяжитесь с %sадминистратором%s.',
	'GOTHICK_RECAPTCHA2_POST_CONFIRM_EXPLAIN' 	=> 'В целях предотвращения автоматических действий, пожалуйста подтвердите что вы человек. Если у вас есть трудности с возможностью ввода кода либо какие-то другие проблемы, пожалуйста свяжитесь с %sадминистратором%s.',

	'GOTHICK_RECAPTCHA2_CONFIRM_HUMAN'			=> 'Пожалуйста подтвердите что вы человек',
	'GOTHICK_RECAPTCHA2_EXPLAIN'				=> 'В целях предотвращения автоматических действий, пожалуйста подтвердите что вы человек, используя сервис Google’s reCaptcha.',
	'GOTHICK_RECAPTCHA2_NOSCRIPT'				=> 'В вашем браузере должен быть включен JavaScript для корректной работы сервиса reCaptcha',
	// TODO if necessary. We may just want to pass back dynamic messages from exceptions thrown from the reCAPTCHA library, its own specific responses, etc.
	'GOTHICK_RECAPTCHA2_EXCEPTION'				=> 'К сожалению произошла ошибка сервиса Google reCaptcha: %1$s. Попробуйте обновить страницу.',
));
