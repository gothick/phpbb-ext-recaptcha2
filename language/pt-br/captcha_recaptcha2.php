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
	'GOTHICK_RECAPTCHA2_LANG'					=> 'pt-BR', // Use https://developers.google.com/recaptcha/docs/language
	'GOTHICK_RECAPTCHA2_NOT_AVAILABLE'			=> 'Para usar o reCaptcha, você deve criar um registro em <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2'						=> 'reCaptcha 2.0',
	// TODO: Hard to pin this down, as reCAPTCHA may have asked them to tick a box, enter a code, identify some pasta, so forth.
	// For now, keep it general. Improve wording. Or see if Google passes back a less generic error message.
	'GOTHICK_RECAPTCHA2_INCORRECT'				=> 'O código de confirmação visual escrito estava incorreto',

	// Keys
	'GOTHICK_RECAPTCHA2_SITEKEY'				=> 'Chave pública do reCaptcha',
	'GOTHICK_RECAPTCHA2_SITEKEY_EXPLAIN'		=> 'A sua chave pública do reCaptcha. Chaves podem ser obtidas em <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2_SECRETKEY'				=> 'Chave privada do reCaptcha',
	'GOTHICK_RECAPTCHA2_SECRETKEY_EXPLAIN'		=> 'A sua chave privada do reCaptcha. Chaves podem ser obtidas em <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'GOTHICK_RECAPTCHA2_CONFIRM_EXPLAIN'		=> 'Para prevenir registros automáticos o administrador do fórum exige que você confirme que é humano. Se você possui qualquer problema visual ou que possa impedir o seu registro, contate o %sAdministrador do Fórum%s para solicitar ajuda.',
	'GOTHICK_RECAPTCHA2_POST_CONFIRM_EXPLAIN' 	=> 'Para prevenir postagens automáticas o administrador do fórum exige que você confirme que é humano. Se você possui qualquer problema visual ou que possa impedir o seu registro, contate o %sAdministrador do Fórum%s para solicitar ajuda.',

	'GOTHICK_RECAPTCHA2_CONFIRM_HUMAN'			=> 'Por favor, confirme que você é humano',
	'GOTHICK_RECAPTCHA2_EXPLAIN'				=> 'No esforço de prevenir submissões automáticas, nós solicitamos que você confirme que é humano usando o serviço do Google reCAPTCHA.',
	'GOTHICK_RECAPTCHA2_NOSCRIPT'				=> 'Você deve habilitar o uso do JavaScript no seu navegador para completar o reCAPTCHA',
	// TODO if necessary. We may just want to pass back dynamic messages from exceptions thrown from the reCAPTCHA library, its own specific responses, etc.
	'GOTHICK_RECAPTCHA2_EXCEPTION'				=> 'Houve um problema de conexão com o serviço reCAPTCHA: %1$s. Tente novamente mais tarde.',
));
