<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "topo3_for_typo3"
***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TOPO3',
	'description' => 'Include a TOPO3 topology in the page',
	'category' => 'plugin',
	'author' => 'Manuel Munz',
	'author_email' => 't3dev@comuno.net',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '0.1.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '7.6.0-7.6.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
    'autoload' => [
        'psr-4' => [
            'C1\\Topo3ForTypo3\\' => 'Classes',
        ]
    ],
);