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
	'GOTHICK_RECAPTCHA2_LANG'					=> 'pt-PT', // Use https://developers.google.com/recaptcha/docs/language
	'GOTHICK_RECAPTCHA2_NOT_AVAILABLE'			=> 'Para usar o reCaptcha, deve criar um registo em <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2'						=> 'reCaptcha 2.0',
	// TODO: Hard to pin this down, as reCAPTCHA may have asked them to tick a box, enter a code, identify some pasta, so forth.
	// For now, keep it general. Improve wording. Or see if Google passes back a less generic error message.
	'GOTHICK_RECAPTCHA2_INCORRECT'				=> 'O código de confirmação visual escrito estava incorreto',

	// Keys
	'GOTHICK_RECAPTCHA2_SITEKEY'				=> 'Chave pública do reCaptcha',
	'GOTHICK_RECAPTCHA2_SITEKEY_EXPLAIN'		=> 'A sua chave pública do reCaptcha. A chave podm ser obtida em <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'GOTHICK_RECAPTCHA2_SECRETKEY'				=> 'Chave privada do reCaptcha',
	'GOTHICK_RECAPTCHA2_SECRETKEY_EXPLAIN'		=> 'A sua chave privada do reCaptcha. A chave podem ser obtida em <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'GOTHICK_RECAPTCHA2_CONFIRM_EXPLAIN'		=> 'Para prevenir registos automáticos o administrador do fórum exige que confirme ser humano. Se possui qualquer problema visual ou algum que possa impedir o seu registo, contacte o %sAdministrador do Fórum%s para solicitar ajuda.',
	'GOTHICK_RECAPTCHA2_POST_CONFIRM_EXPLAIN' 	=> 'Para prevenir mensagens automáticas o administrador do fórum exige que confirme ser humano. Se possui qualquer problema visual ou algum que possa impedir o seu registo, contacte o %sAdministrador do Fórum%s para solicitar ajuda.',

	'GOTHICK_RECAPTCHA2_CONFIRM_HUMAN'			=> 'Por favor, confirme que ser humano',
	'GOTHICK_RECAPTCHA2_EXPLAIN'				=> 'No esforço de prevenir submissões automáticas, solicitamos que confirme ser humano fazendo uso do serviço do Google reCAPTCHA.',
	'GOTHICK_RECAPTCHA2_NOSCRIPT'				=> 'Deve ativar o JavaScript no seu navegador para completar o reCAPTCHA',
	// TODO if necessary. We may just want to pass back dynamic messages from exceptions thrown from the reCAPTCHA library, its own specific responses, etc.
	'GOTHICK_RECAPTCHA2_EXCEPTION'				=> 'Houve um problema de ligação com o serviço reCAPTCHA: %1$s. Tente novamente mais tarde.',
));
