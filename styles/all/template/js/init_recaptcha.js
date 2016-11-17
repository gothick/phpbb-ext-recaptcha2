/*
 * Some extensions force multiple CAPTCHAs onto a page, e.g. QuickLogin will put a CAPTCHA for the login
 * screen on every page, including those which already have a CAPTCHA, e.g. a guest posting page. We use
 * this trick:
 *   http://stackoverflow.com/a/33535769/300836
 * to avoid problems associated with having multiple CAPTCHAs, so we include this function to manually
 * render as many CAPTCHAs as we need to, rather than having Google doing it automatically.
 */
var gothick_recaptcha2_callback = function(){
	$('.g-recaptcha').each(function(index, el) {
		grecaptcha.render(el, {'sitekey' : gothick_recaptcha2_sitekey});
	});
};
