<?php
/* 
 * Configuration for the Cron module.
 */

$config = array (

	'key' => 'abc_keep_secret',
	'allowed_tags' => array('daily', 'hourly', 'frequent'),
	'debug_message' => TRUE,
	'sendemail' => false,
);
