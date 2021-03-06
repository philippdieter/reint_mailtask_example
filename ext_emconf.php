<?php

/* * *************************************************************
 * Extension Manager/Repository config file for ext: "reint_mailtask_example"
 * ************************************************************* */

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Scheduler mail task example',
	'description' => 'An example scheduler task with mail send out with Fluid-templates and multilanguage support.',
	'category' => 'plugin',
	'author' => 'Ephraim Härer',
	'author_email' => 'ephraim.haerer@renolit.com',
	'state' => 'test',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '1.1.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-7.99.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);
