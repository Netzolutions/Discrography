<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$boot = function () {

    // CSH - context sensitive help
    foreach (['discography', 'tracks', 'releases', 'releasetype', 'phonogramtype'] as $table) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_diskographie_domain_model_' . $table);
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            'tx_diskographie_domain_model_' . $table, 'EXT:diskographie/Resources/Private/Language/locallang_csh_' . $table . '.xlf');
    }

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'Netzcript.diskographie',
        'Pi1',
        'Discography'
    );

    if (TYPO3_MODE === 'BE') {

        /**
         * Registers a Backend Module
         */
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
            'Netzcript.diskographie',
            'web',     // Make module a submodule of 'web'
            'discography',    // Submodule key
            '',                        // Position
            [
                'Discography' => 'list, new, create, delete'
            ],
            [
                'access' => 'user,group',
                'icon' => 'EXT:diskographie/ext_icon.gif',
                'labels' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_discography.xlf',
            ]
        );
    }

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('diskographie', 'Configuration/TypoScript', 'Discography');
};

$boot();
unset($boot);