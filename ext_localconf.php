<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$boot = function () {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'Netzcript.diskographie',
		'Pi1',
		[
			'Discography' => 'list, show, new, create, delete, search',
		],
		// non-cacheable actions
		[
			'Discography' => 'search',
		]
	);
};

$boot();
unset($boot);