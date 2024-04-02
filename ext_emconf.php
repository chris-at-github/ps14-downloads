<?php

$EM_CONF[$_EXTKEY] = [
	'title' => 'Ps14 Downloads',
	'description' => 'A TYPO3 extension containing a module for provisioning and managing file downloads',
	'category' => 'distribution',
	'author' => 'Christian Pschorr',
	'author_email' => 'pschorr.christian@gmail.com',
	'author_company' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'clearCacheOnLoad' => 0,
	'version' => '1.0.0',
	'constraints' => [
		'depends' => [
			'typo3' => '12.0.0-12.4.99',
			'ps14_foundation' => '2.0.0-2.9.99',
		],
		'conflicts' => [],
		'suggests' => [],
	],
];
