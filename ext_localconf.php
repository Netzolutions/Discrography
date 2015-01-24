<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Netzcript.' . $_EXTKEY,
	'Pi1',
	array(
		'Discography' => 'list, show, new, create, delete, search',
		
	),
	// non-cacheable actions
	array(
		'Discography' => 'search',
		
	)
);
