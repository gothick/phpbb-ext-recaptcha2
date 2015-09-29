<?php
/**
 * Gothick reCAPTCHA 2.0
 *
 * @package phpBB Extension - reCAPTCHA 2.0
 * @copyright (c) 2015 Matt Gibson Creative Ltd.
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 * Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'GOTHICK_RECAPTCHA2_LANG'					=> 'ar', // Use https://developers.google.com/recaptcha/docs/language
	'GOTHICK_RECAPTCHA2_NOT_AVAILABLE'			=> 'لكي تستطيع استخدام خدمة ريكابتشا , يجب عليك إنشاء حساب في الموقع <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2'						=> 'ريكابتشا 2.0',
	// TODO: Hard to pin this down, as reCAPTCHA may have asked them to tick a box, enter a code, identify some pasta, so forth.
	// For now, keep it general. Improve wording. Or see if Google passes back a less generic error message.
	'GOTHICK_RECAPTCHA2_INCORRECT'				=> 'الريكابتشا الذي قدمته غير صحيح',

	// Keys
	'GOTHICK_RECAPTCHA2_SITEKEY'				=> 'مفتاح الموقع ',
	'GOTHICK_RECAPTCHA2_SITEKEY_EXPLAIN'		=> 'يجب عليك إضافة مفتاح الموقع العام للريكابتشا. يُمكن الحصول على المفاتيح من هنا : <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2_SECRETKEY'				=> 'المفتاح السري ',
	'GOTHICK_RECAPTCHA2_SECRETKEY_EXPLAIN'		=> 'يجب عليك إضافة المفتاح السري للريكابتشا. يُمكن الحصول على المفاتيح من هنا : <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'GOTHICK_RECAPTCHA2_CONFIRM_EXPLAIN'		=> 'لمنع التسجيلات التلقائية , يتطلب منك تجاوز هذا الإختبار للتأكد من أنك إنسان. إذا لديك صعوبة في قراءة الحروف أو لا تستطيع تنفيذ الإختبار أدناه , الرجاء الإتصال بـ %sمدير الموقع%s.',
	'GOTHICK_RECAPTCHA2_POST_CONFIRM_EXPLAIN' 	=> 'لمنع المشاركات التلقائية , يتطلب منك تجاوز هذا الإختبار للتأكد من أنك إنسان. إذا لديك صعوبة في قراءة الحروف أو لا تستطيع تنفيذ الإختبار أدناه , الرجاء الإتصال بـ %sمدير الموقع%s.',

	'GOTHICK_RECAPTCHA2_CONFIRM_HUMAN'			=> 'نرجوا التأكد من أنك إنسان ',
	'GOTHICK_RECAPTCHA2_EXPLAIN'				=> 'كمحاولة لمنع التسجيلات التلقائية , نطلب منك التأكيد على أنك إنسان بإستخدام اختبار ريكابتشا من جوجل.',
	'GOTHICK_RECAPTCHA2_NOSCRIPT'				=> 'يجب تفعيل سكربت الجافا في المتصفح لديك لإستكمال الإختبار ريكابتشا',
	// TODO if necessary. We may just want to pass back dynamic messages from exceptions thrown from the reCAPTCHA library, its own specific responses, etc.
	'GOTHICK_RECAPTCHA2_EXCEPTION'				=> 'يوجد خطأ عام في الإتصال بخدمة ريكابتشا : %1$s. نرجوا المحاولة لاحقاً.',
));
