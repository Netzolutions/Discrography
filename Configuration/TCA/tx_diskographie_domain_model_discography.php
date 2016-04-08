<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

$ll = 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToInsertRecords('tx_diskographie_domain_model_discography');

$tx_diskographie_domain_model_discography = [
    'ctrl' => [
        'title' => $ll . 'tx_diskographie_domain_model_discography',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => TRUE,
        'sortby' => 'sorting',
        'versioningWS' => 2,
        'versioning_followPages' => TRUE,

        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'title,artists,release_type,phonogram_type,releases,',
        'iconfile' => 'EXT:diskographie/Resources/Public/Icons/tx_diskographie_domain_model_discography.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'cruser_id,pid,sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, description, artists, release_type, tracks, releases',
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ],
                ],
                'default' => 0,
            ]
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_diskographie_domain_model_discography',
                'foreign_table_where' => 'AND tx_diskographie_domain_model_discography.pid=###CURRENT_PID### AND tx_diskographie_domain_model_discography.sys_language_uid IN (-1,0)',
                'showIconTable' => false
            ]
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
                'default' => ''
            ]
        ],

        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ]
        ],

        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'default' => 0
            ]
        ],
        'cruser_id' => [
            'label' => 'cruser_id',
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'crdate' => [
            'label' => 'crdate',
            'config' => [
                'type' => 'passthrough',
            ]
        ],
        'tstamp' => [
            'label' => 'tstamp',
            'config' => [
                'type' => 'passthrough',
            ]
        ],
        'title' => [
            'exclude' => 0,
            'label' => $ll . 'tx_diskographie_domain_model_discography.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'description' => [
            'exclude' => 0,
            'label' => $ll . 'tx_diskographie_domain_model_discography.description',
            'config' => [
                'type' => 'text',
                'cols' => '80',
                'rows' => '15',
            ],
            'defaultExtras' => 'richtext[]'
        ],
        'artists' => [
            'exclude' => 0,
            'label' => $ll . 'tx_diskographie_domain_model_discography.artists',
            'config' => [
                'type' => 'select',
                'foreign_table' => 'tx_lyrics_domain_model_artist',
                'MM' => 'tx_diskographie_discography_artist_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'wizards' => [
                    '_PADDING' => 1,
                    '_VERTICAL' => 1,
                    'edit' => [
                        'type' => 'popup',
                        'title' => 'Edit',
                        'module' => [
                            'name' => 'wizard_edit',
                        ],
                        'icon' => 'edit2.gif',
                        'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                    ],
                    'add' => [
                        'type' => 'script',
                        'title' => 'Create+',
                        'icon' => 'add.gif',
                        'params' => [
                            'table' => 'tx_lyrics_domain_model_artist',
                            'pid' => '###CURRENT_PID###',
                            'setValue' => 'prepend'
                        ],
                        'module' => [
                            'name' => 'wizard_add'
                        ]
                    ],
                ],
            ],
        ],
        'release_type' => [
            'exclude' => 0,
            'label' => $ll . 'tx_diskographie_domain_model_discography.release_type',
            'config' => [
                'type' => 'select',
                'foreign_table' => 'tx_diskographie_domain_model_releasetype',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'tracks' => [
            'exclude' => 1,
            'label' => $ll . 'tx_diskographie_domain_model_discography.tracks',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_diskographie_domain_model_track',
                'foreign_field' => 'discography',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'releases' => [
            'exclude' => 0,
            'label' => $ll . 'tx_diskographie_domain_model_discography.releases',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_diskographie_domain_model_release',
                'foreign_field' => 'discography',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
    ],
    'types' => [
        '1' => [
            'showitem' => '
            sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource,
            --palette--;LLL:EXT:diskographie/Resources/Private/Language/locallang_ttc.xlf:palette.info;info,
             description, artists,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                hidden;;1,             
            --div--;LLL:EXT:diskographie/Resources/Private/Language/locallang_ttc.xlf:tabs.tracks, 
                tracks, 
            --div--;LLL:EXT:diskographie/Resources/Private/Language/locallang_ttc.xlf:tabs.releases, 
                releases, '
        ],
    ],
    'palettes' => [
        'info' => [
            'showitem' => '
                title,
				release_type
			',
        ],
    ],
];
return $tx_diskographie_domain_model_discography;