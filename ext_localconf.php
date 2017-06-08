<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Famo.' . $_EXTKEY,
	'Pi1',
	array(
		'Contact' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Contact' => 'list',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Famo.' . $_EXTKEY,
	'Pi2',
	array(
		'Contact' => 'search',
		
	),
	// non-cacheable actions
	array(
		'Contact' => '',
		'Organization' => '',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Famo.' . $_EXTKEY,
	'Pi3',
	array(
		'Organization' => 'serviceShow',
		
	),
	// non-cacheable actions
	array(
		'Organization' => 'show',
		
	)
);
