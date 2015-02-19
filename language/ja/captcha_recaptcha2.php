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
	'GOTHICK_RECAPTCHA2_LANG'					=> 'ja', // Use https://developers.google.com/recaptcha/docs/language
	'GOTHICK_RECAPTCHA2_NOT_AVAILABLE'			=> 'reCaptchaを使用するには、<a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>でアカウントを作成する必要があります。',
	'GOTHICK_RECAPTCHA2'						=> 'reCaptcha 2.0',
	// TODO: Hard to pin this down, as reCAPTCHA may have asked them to tick a box, enter a code, identify some pasta, so forth.
	// For now, keep it general. Improve wording. Or see if Google passes back a less generic error message.
	'GOTHICK_RECAPTCHA2_INCORRECT'				=> '送信された認証コードが間違っています',

	// Keys
	'GOTHICK_RECAPTCHA2_SITEKEY'				=> 'reCaptcha公開キー',
	'GOTHICK_RECAPTCHA2_SITEKEY_EXPLAIN'		=> 'reCaptcha公開キーは<a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>から入手できます',
	'GOTHICK_RECAPTCHA2_SECRETKEY'				=> 'reCaptcha非公開キー',
	'GOTHICK_RECAPTCHA2_SECRETKEY_EXPLAIN'		=> 'reCaptcha非公開キーは<a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>から入手できます',

	'GOTHICK_RECAPTCHA2_CONFIRM_EXPLAIN'		=> '自動登録を防ぐために、掲示板はあなたが人間であることを確認する必要があります。あなたが視覚障害である、もしくは以下のタスクを完了できない場合、%s掲示板の管理者%sにお問い合わせください。',
	'GOTHICK_RECAPTCHA2_POST_CONFIRM_EXPLAIN' 	=> '自動投稿を防ぐために、掲示板はあなたが人間であることを確認する必要があります。あなたが視覚障害である、もしくは以下のタスクを完了できない場合、%s掲示板の管理者%sにお問い合わせください。',

	'GOTHICK_RECAPTCHA2_CONFIRM_HUMAN'			=> 'あなたが人間だということをご確認ください',
	'GOTHICK_RECAPTCHA2_EXPLAIN'				=> '自動投稿を防ぐための努力として、我々はあなたがGoogleのreCAPTCHAのサービスを利用してあなたが人間であるということを確認することが必要です。',
	'GOTHICK_RECAPTCHA2_NOSCRIPT'				=> 'reCAPTCHAを完了するにはブラウザーのJavaScriptを有効にする必要があります。',
	// TODO if necessary. We may just want to pass back dynamic messages from exceptions thrown from the reCAPTCHA library, its own specific responses, etc.
	'GOTHICK_RECAPTCHA2_EXCEPTION'				=> 'reCAPTCHAのサービスへ接続中に一般的なエラーが発生しました: %1$s しばらくたってからもう一度お試しください。',
));
