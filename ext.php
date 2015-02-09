<?php
/**
 * Gothick New reCAPTCHA
 *
 * @package phpBB Extension - New reCAPTCHA
 * @copyright (c) 2015 Matt Gibson Creative Ltd.
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace gothick\newrecaptcha;

class ext extends \phpbb\extension\base
{
	// override disable_step
	function disable_step($old_state)
	{
		switch ($old_state)
		{
			case '':
				// We need to change the CAPTCHA configuration back to something
				// builtin if we're disabled when we're the active CAPTCHA, otherwise
				// it'll confuse the board something chronic.

				/* @var $config \phpbb\config\config */
				$config = $this->container->get('config');

				/* @var $newrecaptcha \gothick\newrecaptcha\captcha\recaptcha */
				$newrecaptcha = $this->container->get('gothick.newrecaptcha.captcha.recaptcha');

				if ($newrecaptcha->get_service_name() == $config['captcha_plugin'])
				{
					// Falling back to the built-in reCAPTCHA doesn't seem too
					// presumptious.
					$config->set('captcha_plugin', 'core.captcha.plugins.recaptcha');
				}
				return 'captcha_reset_to_core';
			break;

			default:
				// Run parent disable step method
				return parent::disable_step($old_state);
			break;
		}
	}
}
