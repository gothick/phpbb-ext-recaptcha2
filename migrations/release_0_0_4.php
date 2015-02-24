<?php
/**
 * Gothick reCAPTCHA 2.0
 *
 * @package phpBB Extension - reCAPTCHA 2.0
 * @copyright (c) 2015 Matt Gibson Creative Ltd.
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace gothick\recaptcha2\migrations;

class release_0_0_4 extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return array(
					'\phpbb\db\migration\data\v310\alpha2'
		);
	}

	public function effectively_installed()
	{
		// Early versions of this extension didn't have these config
		// options migrated in, they just set them. Check to see if one
		// exists before we bother pushing them in ourselves.
		return isset($this->config['gothick_recaptcha2_sitekey']);
	}

	public function update_data()
	{
		return array(
					array(
						'config.add',
						array(
							'gothick_recaptcha2_sitekey',
							''
						)
					),
					array(
						'config.add',
						array(
							'gothick_recaptcha2_secretkey',
							''
						)
					),
		);
	}
}
