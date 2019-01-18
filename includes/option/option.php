<?php


self::$config['site']['title']  = null;
self::$config['site']['desc']   = null;
self::$config['site']['slogan'] = null;


/**
@ In the name Of Allah
* The base configurations of the jibres.
*/
self::$language =
[
	'default' => 'fa',
	'list'    => ['fa','en',],
];
/**
 * system default lanuage
 */


self::$config['redirect']                     = '';

// self::$config['visitor'] = true;

self::$config['favicon']['version']           = null;


/**
 * call kavenegar template
 */
self::$config['enter']['call']                = true;
self::$config['enter']['call_template_fa'] = 'ermile-fa';
self::$config['enter']['call_template_en'] = 'ermile-en';


/**
 * first signup url
 * main redirect url . signup redirect url
 */
self::$config['enter']['singup_redirect']     = '';


/**
 * cronjob urls and status
 */
self::$config['cronjob']['status'] = true;


/**
 * list of units
 */
self::$config['units'] =
[
	1 =>
	[
		'title' => 'toman',
		'desc'  => "Toman",
	],

	2 =>
	[
		'title' => 'dollar',
		'desc'  => "$",
	],
];
// the unit id for default
self::$config['default_unit'] = 1;
// force change unit to this unit
self::$config['force_unit']   = 1;


self::$config['enter']['verify_telegram'] = true;
self::$config['enter']['verify_sms']      = true;
self::$config['enter']['verify_call']     = true;
self::$config['enter']['verify_sendsms']  = false;

self::$sms['kavenegar']['status']             = true;

self::$sms['kavenegar']['debug']              = null;
self::$sms['kavenegar']['line']              = '10006660066600';
self::$sms['kavenegar']['iran']               = null;
self::$sms['kavenegar']['header']             = null;
self::$sms['kavenegar']['footer']             = null;
self::$sms['kavenegar']['one']                = true;



self::$social['telegram']['status']     = true;
// self::$social['telegram']['bot']        = '';
// self::$social['telegram']['hookFolder'] = '';
// self::$social['telegram']['token']      = '';
// self::$social['telegram']['debug']      = true;
// enable tunnel
self::$social['telegram']['tunnel']     = true;
?>