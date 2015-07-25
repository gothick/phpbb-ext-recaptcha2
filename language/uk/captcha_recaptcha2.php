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
	'GOTHICK_RECAPTCHA2_LANG'					=> 'uk', // Use https://developers.google.com/recaptcha/docs/language
	'GOTHICK_RECAPTCHA2_NOT_AVAILABLE'			=> 'Для того, щоб використовувати reCaptcha, ви маєте створити аккаунт на цьому сайті <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2'						=> 'reCaptcha 2.0',
	// TODO: Hard to pin this down, as reCAPTCHA may have asked them to tick a box, enter a code, identify some pasta, so forth.
	// For now, keep it general. Improve wording. Or see if Google passes back a less generic error message.
	'GOTHICK_RECAPTCHA2_INCORRECT'				=> 'reCAPTCHA яку ви вказали неправильна',

	// Keys
	'GOTHICK_RECAPTCHA2_SITEKEY'				=> 'Публічний ключ reCaptcha (ключ сайту)',
	'GOTHICK_RECAPTCHA2_SITEKEY_EXPLAIN'		=> 'reCaptcha публічний ключ сайту. Цей ключ можна отримати на сайті <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2_SECRETKEY'				=> 'reCaptcha секретний ключ',
	'GOTHICK_RECAPTCHA2_SECRETKEY_EXPLAIN'		=> 'Секретний ключ reCaptcha . Цей ключ можна отримати на сайті <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'GOTHICK_RECAPTCHA2_CONFIRM_EXPLAIN'		=> 'З метою попередження автоматичних дій, підтвердіть, будь ласка, що ви людина. Якщо у вас виникли труднощі з вводом коду чи будь-які інші труднощі, звяжіться, будь ласка, з %sадміністратором%s.',
	'GOTHICK_RECAPTCHA2_POST_CONFIRM_EXPLAIN' 	=> 'З метою попередження автоматичних дій, підтвердіть, будь ласка, що ви людина. Якщо у вас виникли труднощі з вводом коду чи будь-які інші труднощі, звяжіться, будь ласка, з %sадміністратором%s.',

	'GOTHICK_RECAPTCHA2_CONFIRM_HUMAN'			=> 'Підтвердіть, будь ласка, що ви людина',
	'GOTHICK_RECAPTCHA2_EXPLAIN'				=> 'З метою запобігання автоматичних дій, підтвердіть, будь-ласка, що ви людина, використовуючи сервіс Google’s reCaptcha.',
	'GOTHICK_RECAPTCHA2_NOSCRIPT'				=> 'В вашому браузері має бути ввімкнений JavaScript для коректної роботи сервісу reCaptcha',
	// TODO if necessary. We may just want to pass back dynamic messages from exceptions thrown from the reCAPTCHA library, its own specific responses, etc.
	'GOTHICK_RECAPTCHA2_EXCEPTION'				=> 'Нажаль, виникла помилка роботи сервісу Google reCaptcha: %1$s. Спробуйте оновити сторінку.',
));
