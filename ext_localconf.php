<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Comuno.' . $_EXTKEY,
	'Topo3',
	array(
		'Topo3' => 'show',
	),
	// non-cacheable actions
	array(
	)
);
