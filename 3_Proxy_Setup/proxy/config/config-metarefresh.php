<?php

$config = array(

	'conditionalGET'	=> TRUE,

	'sets' => array(
		'testshib' => array(
			'cron'		=> array('hourly'),
			'sources'	=> array(
				array(
					'src' => 'https://www.testshib.org/metadata/testshib-providers.xml',
				),
				// For eduGain federations you would configure certificates to use for validting the xml
			),
			'expireAfter' 		=> 60*60*24*4, // Maximum 4 days cache time
			'outputDir' 	=> 'metadata/testshib/',

			/*
			 * Which output format the metadata should be saved as.
			 * Can be 'flatfile' or 'serialize'. 'flatfile' is the default.
			 */
			'outputFormat' => 'flatfile',
		),
	),
);



