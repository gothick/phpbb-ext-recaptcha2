<?php
/**
 * This is a PHP library that handles calling reCAPTCHA.
 *    - Documentation and latest version
 *          https://developers.google.com/recaptcha/docs/php
 *    - Get a reCAPTCHA API Key
 *          https://www.google.com/recaptcha/admin/create
 *    - Discussion group
 *          http://groups.google.com/group/recaptcha
 *
 * @copyright Copyright (c) 2014, Google Inc.
 * @link      http://www.google.com/recaptcha
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/**
 * MG: I have significantly changed this library from Google's own, mostly because
 * it was very old-school, very flaky code without namespaces, and requiring
 * lots of fixes that weren't being merged back in (22 pull requests of pretty
 * obvious bugs/problems that I can see at the moment, for example:
 * https://github.com/google/ReCAPTCHA/pulls.) I did consider forking and making
 * changes and bringing it in via Composer, but it's only small and it would
 * have been changed pretty much beyond recognition or the easy ability to merge
 * upstream changes as soon as I'd started.
 *
 * Special thanks to Jesus Castagnetto for the helpful modifications/PR I based a lot
 * of this cleaner code on, and the curl implementation:
 *
 * https://github.com/jmcastagnetto/ReCAPTCHA/blob/modifications/php/recaptchalib.php
 */
namespace gothick\recaptcha2\google;

class recaptcha
{
	const SIGNUP_URL = 'https://www.google.com/recaptcha/admin';
	const SITEVERIFY_URL = 'https://www.google.com/recaptcha/api/siteverify?';
	const VERSION = 'php_1.0';

	protected $secret;
	protected $curl_opts;

	/**
	 * Constructor.
	 *
	 * @param string $secret shared secret between site and ReCAPTCHA server.
	 */
	function __construct ($secret, $curl_opts = array())
	{
		if ($secret == null || $secret == "")
		{
			throw new Exception("To use reCAPTCHA you must get an API key from <a href='{self::SIGNUP_URL}'>{self::SIGNUP_URL}</a>");
		}
		$this->secret = $secret;
		$this->curl_opts = $curl_opts;
	}

	/**
	 * Submits an HTTP GET to a reCAPTCHA server.
	 *
	 * @param string $path url path to recaptcha server.
	 * @param array $data array of parameters to be sent.
	 *
	 * @return array response
	 */
	protected function submitHTTPGet ($path, $data)
	{
		// MG (Though altered to replace Google's odd hand-rolled _encodeQS thingy with
		// PHP's perfectly fine http_build_query...)
		$req = http_build_query($data);

		// prefer curl
		if (function_exists('curl_version'))
		{
			// default cURL options
			// modified from: http://stackoverflow.com/a/6595108
			$opts = array(
					CURLOPT_HEADER => false,
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_FOLLOWLOCATION => true,
					CURLOPT_USERAGENT => 'ReCaptcha ' . self::VERSION,
					CURLOPT_AUTOREFERER => true,
					CURLOPT_CONNECTTIMEOUT => 60,
					CURLOPT_TIMEOUT => 60,
					CURLOPT_MAXREDIRS => 5,
					CURLOPT_ENCODING => ''
			);
			// check if we got overrides, or extra options (eg. proxy configuration)
			if (is_array($this->curl_opts) && ! empty($this->curl_opts))
			{
				$opts = array_merge($opts, $this->curl_opts);
			}
			$conn = curl_init($path . $req);
			curl_setopt_array($conn, $opts);
			$response = curl_exec($conn);
			// handle a connection error
			$errno = curl_errno($conn);
			if ($errno !== 0)
			{
				throw new Exception(
						'Fatal error while contacting reCAPTCHA. ' . $errno .
								 ': ' . curl_error($conn) . '.');
			}
			curl_close($conn);
		}
		else
		{
			// fallback
			$response = file_get_contents($path . $req);
		}
		return $response;
	}

	/**
	 * Calls the reCAPTCHA siteverify API to verify whether the user passes
	 * CAPTCHA test.
	 *
	 * @param string $remoteIp IP address of end user.
	 * @param string $response response string from recaptcha verification.
	 *
	 * @return recaptcha_response
	 */
	public function verifyResponse ($remoteIp, $response)
	{
		// Discard empty solution submissions
		if ($response == null || strlen($response) == 0)
		{
			$recaptcha_response = new recaptcha_response();
			$recaptcha_response->success = false;
			$recaptcha_response->errorCodes = 'missing-input';
			return $recaptcha_response;
		}
		$getResponse = $this->submitHttpGet(self::SITEVERIFY_URL,
				array(
						'secret' => $this->secret,
						'remoteip' => $remoteIp,
						'v' => self::VERSION,
						'response' => $response
				));
		$answers = json_decode($getResponse, true);
		$recaptcha_response = new recaptcha_response();
		if (isset($answers['success']))
		{
			$recaptcha_response->success = true;
		}
		else
		{
			$recaptcha_response->success = false;
			if (isset($answers['error-codes']))
			{
				$recaptcha_response->errorCodes = $answers['error-codes'];
			}
		}
		return $recaptcha_response;
	}
}
