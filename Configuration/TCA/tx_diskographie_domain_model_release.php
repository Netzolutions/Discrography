<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

return [
    'ctrl' => [
        'title' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_releases',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => TRUE,

        'versioningWS' => 2,
        'versioning_followPages' => TRUE,

        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'primary_release,title,publication_date,description,cover,discs,label_number,country,rarity,track_list,',
        'iconfile' => 'EXT:diskographie/Resources/Public/Icons/tx_diskographie_domain_model_releases.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, primary_release, title, publication_date, phonogram_type, description, cover, discs, label_number, country, rarity, override_tracks',
    ],
    'types' => [
        '1' => ['showitem' => '
        sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, 
        title
            --palette--;LLL:EXT:diskographie/Resources/Private/Language/locallang_ttc.xlf:palette.info;info,
            title, country, description, 
        --div--;LLL:EXT:diskographie/Resources/Private/Language/locallang_ttc.xlf:tabs.overrides,
            cover,
            override_tracks,            
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
             hidden;;1
        '],
    ],
    'palettes' => [
        'info' => [
            'showitem' => '
                discs,
				phonogram_type,
				label_number,
				rarity,
				publication_date
			',
        ],
    ],
    'columns' => [

        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => [
                    ['LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1],
                    ['LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0]
                ],
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_diskographie_domain_model_release',
                'foreign_table_where' => 'AND tx_diskographie_domain_model_release.pid=###CURRENT_PID### AND tx_diskographie_domain_model_release.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
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
            ],
        ],

        'title' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_release.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'phonogram_type' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_discography.phonogram_type',
            'config' => [
                'type' => 'select',
                'foreign_table' => 'tx_diskographie_domain_model_phonogramtype',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],

        'publication_date' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_release.publication_date',
            'config' => [
                'type' => 'input',
                'size' => 7,
                'eval' => 'date',
                'checkbox' => 1,
                'default' => time()
            ],
        ],
        'description' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_release.description',
            'config' => [
                'type' => 'text',
                'cols' => '80',
                'rows' => '2',
            ],
        ],
        'cover' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_release.cover',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'cover',
                ['maxitems' => 1],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        'discs' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_release.discs',
            'config' => [
                'type' => 'select',
                'items' => [
                    [1, 1],
                    [2, 2],
                    [3, 3],
                    [4, 4],
                    [5, 5],
                    [6, 6],
                    [7, 7],
                    [8, 8],
                    [9, 9]
                ],
            ]
        ],
        'label_number' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_release.label_number',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'country' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_release.country',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'rarity' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_release.rarity',
            'config' => [
                'type' => 'select',
                'items' => [
                    [1, 1],
                    [2, 2],
                    [3, 3],
                    [4, 4],
                    [5, 5],
                    [6, 6],
                    [7, 7],
                    [8, 8],
                    [9, 9],
                    [10, 10]
                ],
            ],
        ],
        'override_tracks' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_release.override_tracks',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_diskographie_domain_model_track',
                'foreign_field' => 'discography_release',
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

        'discography' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
