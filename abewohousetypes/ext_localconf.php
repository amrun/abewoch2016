<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Abewoch.' . $_EXTKEY,
	'Houselist',
	array(
		'House' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'House' => '',
		
	)
);
