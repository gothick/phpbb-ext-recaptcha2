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
	'GOTHICK_RECAPTCHA2_LANG'					=> 'zh-TW', // Use https://developers.google.com/recaptcha/docs/language
	'GOTHICK_RECAPTCHA2_NOT_AVAILABLE'			=> '若要開始使用 reCaptcha, 你要先在 <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> 申請帳號。',
	'GOTHICK_RECAPTCHA2'						=> 'reCaptcha 2.0',
	// TODO: Hard to pin this down, as reCAPTCHA may have asked them to tick a box, enter a code, identify some pasta, so forth.
	// For now, keep it general. Improve wording. Or see if Google passes back a less generic error message.
	'GOTHICK_RECAPTCHA2_INCORRECT'				=> '你所提供的 reCAPTCHA 不正確',

	// Keys
	'GOTHICK_RECAPTCHA2_SITEKEY'				=> 'reCaptcha 網站金鑰',
	'GOTHICK_RECAPTCHA2_SITEKEY_EXPLAIN'		=> '你的 reCaptcha 公用網站金鑰. 金鑰可從 <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> 獲得。',
	'GOTHICK_RECAPTCHA2_SECRETKEY'				=> 'reCaptcha 秘密金鑰',
	'GOTHICK_RECAPTCHA2_SECRETKEY_EXPLAIN'		=> '你的 reCaptcha 秘密金鑰. 金鑰可從 <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> 獲得。',

	'GOTHICK_RECAPTCHA2_CONFIRM_EXPLAIN'		=> '為了防範自動註冊，站方需要你能證明你是真人。 如果你是視障人士或其他原因無法完成註冊，請聯絡 %s討論版管理員%s 尋求協助。',
	'GOTHICK_RECAPTCHA2_POST_CONFIRM_EXPLAIN' 	=> '為了防範自動註冊，站方需要你能證明你是真人。 如果你是視障人士或其他原因無法完成註冊，請聯絡 %s討論版管理員%s 尋求協助。',

	'GOTHICK_RECAPTCHA2_CONFIRM_HUMAN'			=> '請證明你是真人',
	'GOTHICK_RECAPTCHA2_EXPLAIN'				=> '為了致力避免自動發表文章的情況發生，我們需要你使用 Google 的 reCAPTCHA 服務來證明你是真人。',
	'GOTHICK_RECAPTCHA2_NOSCRIPT'				=> '你必須啟用瀏覽器的 JavaScript 才能完成 reCAPTCHA 測驗。',
	// TODO if necessary. We may just want to pass back dynamic messages from exceptions thrown from the reCAPTCHA library, its own specific responses, etc.
	'GOTHICK_RECAPTCHA2_EXCEPTION'				=> '連接 reCAPTCHA 服務時遭遇到一般的錯誤： %1$s 請稍候再試。',
));
