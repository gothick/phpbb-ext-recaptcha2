<?php
/**
 * Gothick reCAPTCHA 2.0
 *
 * @package phpBB Extension - reCAPTCHA 2.0
 * @copyright (c) 2015 Matt Gibson Creative Ltd.
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace gothick\recaptcha2\captcha;

class recaptcha2 extends \phpbb\captcha\plugins\captcha_abstract
{
	protected $g_recaptcha_response;

	// PHP really needs const with an access modifier.
	protected static $CONFIG_SITEKEY = 'gothick_recaptcha2_sitekey';
	protected static $CONFIG_SECRETKEY = 'gothick_recaptcha2_secretkey';

	/**
	 * @var \phpbb\config\config
	 */
	protected $config;

	/**
	 * @var \phpbb\db\driver\driver_interface
	 */
	protected $db;

	/**
	 * @var \phpbb\user
	 */
	protected $user;

	/**
	 * @var \phpbb\request\request
	 */
	protected $request;

	/**
	 * @var \phpbb\template\template
	 */
	protected $template;

	/**
	 * @var \phpbb\log\log_interface
	 */
	protected $log;

	/**
	 * @var scalar string
	 */
	protected $phpbb_root_path;

	/**
	 * @var scalar string
	 */
	protected $phpEx;


	/**
	 * Constructor
	 *
	 * @param \phpbb\config\config $config
	 * @param \phpbb\db\driver\driver_interface $db
	 * @param \phpbb\user $user
	 * @param \phpbb\request\request $request
	 * @param \phpbb\template\template $template
	 * @param \phpbb\log\log_interface $log
	 * @param string $phpbb_root_path
	 * @param string $phpEx
	 */
	public function __construct(
			\phpbb\config\config $config,
			\phpbb\db\driver\driver_interface $db,
			\phpbb\user $user,
			\phpbb\request\request $request,
			\phpbb\template\template $template,
			\phpbb\log\log_interface $log,
			$phpbb_root_path,
			$phpEx
	)
	{
		// DI
		$this->config = $config;
		$this->db = $db;
		$this->user = $user;
		$this->request = $request;
		$this->template = $template;
		$this->log = $log;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->phpEx = $phpEx;
	}

	public function init($type)
	{
		$this->user->add_lang_ext('gothick/recaptcha2', 'captcha_recaptcha2');
		parent::init($type);
		$this->g_recaptcha_response = $this->request->variable('g-recaptcha-response', '');
	}

	public function is_available()
	{
		// We need to load the language files here for the ACP page, as it doesn't call init. This is
		// where the "old" reCAPTCHA plug in core does it, anyway...
		$this->user->add_lang_ext('gothick/recaptcha2', 'captcha_recaptcha2');

		return (!empty($this->config[self::$CONFIG_SITEKEY]) && !empty($this->config[self::$CONFIG_SECRETKEY]));
	}

	/**
	 *  API function
	 */
	public function has_config()
	{
		return true;
	}

	public static function get_name()
	{
		return 'GOTHICK_RECAPTCHA2';
	}

	/**
	 * This function is implemented because required by the upper class, but is never used for reCaptcha.
	 */
	public function get_generator_class()
	{
		throw new \Exception('No generator class given.');
	}

	function acp_page($id, &$module)
	{
		$captcha_vars = array(
			self::$CONFIG_SITEKEY => 'RECAPTCHA2_SITEKEY',
			self::$CONFIG_SECRETKEY => 'RECAPTCHA2_SECRETKEY',
		);

		$module->tpl_name = '@gothick_recaptcha2/captcha_recaptcha2_acp';
		$module->page_title = 'ACP_VC_SETTINGS';
		$form_key = 'acp_captcha';
		add_form_key($form_key);

		if ($this->request->is_set_post('submit') && check_form_key($form_key))
		{
			$captcha_vars = array_keys($captcha_vars);
			foreach ($captcha_vars as $captcha_var)
			{
				$value = $this->request->variable($captcha_var, '');
				if ($value)
				{
					$this->config->set($captcha_var, $value);
				}
			}

			$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_CONFIG_VISUAL');
			trigger_error($this->user->lang['CONFIG_UPDATED'] . adm_back_link($module->u_action));
		}
		else if ($this->request->is_set_post('submit'))
		{
			trigger_error($this->user->lang['FORM_INVALID'] . adm_back_link($module->u_action));
		}

		foreach ($captcha_vars as $captcha_var => $template_var)
		{
			$var = ($this->request->is_set_post($captcha_var)) ? $this->request->variable($captcha_var, '') : ((isset($this->config[$captcha_var])) ? $this->config[$captcha_var] : '');
			$this->template->assign_var($template_var, $var);
		}

		$this->template->assign_vars(array(
			'CAPTCHA_PREVIEW'	=> $this->get_demo_template($id),
			'CAPTCHA_NAME'		=> $this->get_service_name(),
			'U_ACTION'			=> $module->u_action,
		));
	}

	// not needed
	public function execute_demo()
	{
	}

	// not needed
	public function execute()
	{
	}

	public function get_template()
	{
		if ($this->is_solved())
		{
			return false;
		}
		else
		{
			$contact_link = phpbb_get_board_contact_link($this->config, $this->phpbb_root_path, $this->phpEx);
			$explain = $this->user->lang(($this->type != CONFIRM_POST) ? 'GOTHICK_RECAPTCHA2_CONFIRM_EXPLAIN' : 'GOTHICK_RECAPTCHA2_POST_CONFIRM_EXPLAIN', '<a href="' . $contact_link . '">', '</a>');

			// Language code for reCAPTCHA to use
			$recaptcha2_lang = $this->user->lang('GOTHICK_RECAPTCHA2_LANG');
			if ($recaptcha2_lang == 'GOTHICK_RECAPTCHA2_LANG')
			{
				// If we don't have a language code set in our language file, then we don't
				// pass anything; reCAPTCHA will attempt to guess the user's language.
				$recaptcha2_lang = '';
			}

			$this->template->assign_vars(array(
				'RECAPTCHA2_SITEKEY'			=> isset($this->config[self::$CONFIG_SITEKEY]) ? $this->config[self::$CONFIG_SITEKEY] : '',
				'S_RECAPTCHA_AVAILABLE'			=> self::is_available(),
				'S_CONFIRM_CODE'				=> true,
				'S_TYPE'						=> $this->type,
				'L_CONFIRM_EXPLAIN'				=> $explain,
				'L_GOTHICK_RECAPTCHA2_LANG'	=> $recaptcha2_lang // If we don't pass it explicitly, INCLUDEJS won't use it.
			));

			return '@gothick_recaptcha2/captcha_recaptcha2.html';
		}
	}

	public function get_demo_template($id)
	{
		return $this->get_template();
	}

	public function get_hidden_fields()
	{
		$hidden_fields = array();

		// this is required for posting.php - otherwise we would forget about the captcha being already solved
		if ($this->solved)
		{
			$hidden_fields['confirm_code'] = $this->code;
		}
		$hidden_fields['confirm_id'] = $this->confirm_id;
		return $hidden_fields;
	}

	public function uninstall()
	{
		$this->garbage_collect(0);
	}

	public function install()
	{
		return;
	}

	public function validate()
	{
		if (!parent::validate())
		{
			return false;
		}
		else
		{
			try
			{
				// TODO We should probably dependency-inject this
				$recaptcha = new \ReCaptcha\ReCaptcha($this->config[self::$CONFIG_SECRETKEY]);
				$response = $recaptcha->verify($this->request->variable('g-recaptcha-response', ''), $this->user->ip);
				if ($response->isSuccess())
				{
					$this->solved = true;
					return false;
				}
				else
				{
					// $errors = $response->getErrorCodes();
					// TODO: Can we pass something less general back from the error response above?
					return $this->user->lang['GOTHICK_RECAPTCHA2_INCORRECT'];
				}
			}
			catch (\Exception $e)
			{
				trigger_error($this->user->lang('GOTHICK_RECAPTCHA2_EXCEPTION', $e->getMessage()), E_USER_ERROR);
			}
		}
	}
}
