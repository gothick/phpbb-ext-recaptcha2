<?php
/**
 * Gothick reCAPTCHA 2.0
 *
 * @package phpBB Extension - reCAPTCHA 2.0
 * @copyright (c) 2015 Matt Gibson Creative Ltd.
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace gothick\recaptcha2;

class ext extends \phpbb\extension\base
{
	// override disable_step
	public function disable_step($old_state)
	{
		switch ($old_state)
		{
			case '':
				// We need to change the CAPTCHA configuration back to something
				// builtin if we're disabled when we're the active CAPTCHA, otherwise
				// it'll confuse the board something chronic.

				/* @var $config \phpbb\config\config */
				$config = $this->container->get('config');

				/* @var $recaptcha2 \gothick\recaptcha2\captcha\recaptcha2 */
				$recaptcha2 = $this->container->get('gothick.recaptcha2.captcha.recaptcha2');

				if ($recaptcha2->get_service_name() == $config['captcha_plugin'])
				{
					// Used to fall back to reCAPTCHA, but of course, that may not be
					// configured. Fall back to something that doesn't need configuration
					// and is likely to just work.
					$config->set('captcha_plugin', 'core.captcha.plugins.nogd');
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
