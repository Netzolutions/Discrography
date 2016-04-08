<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

return [
    'ctrl' => [
        'title' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_track',
        'label' => 'lyrics',
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
        'searchFields' => 'title,time,description,lyrics,',
        'iconfile' =>  'EXT:diskographie/Resources/Public/Icons/tx_diskographie_domain_model_track.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, track_number, title, time, description, lyrics',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, track_number, title, time, description, lyrics, '],
    ],
    'palettes' => [
        '1' => ['showitem' => ''],
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
                'foreign_table' => 'tx_diskographie_domain_model_track',
                'foreign_table_where' => 'AND tx_diskographie_domain_model_track.pid=###CURRENT_PID### AND tx_diskographie_domain_model_track.sys_language_uid IN (-1,0)',
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
        'track_number' => [
            'displayCond' => 'FIELD:discography_release:>:0',
            'exclude' => 0,
            'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_track.track_number',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'int'
            ],
        ],
        'title' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_track.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'time' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_track.time',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'description' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_track.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'lyrics' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_track.lyrics',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_lyrics_domain_model_lyrics',
                'maxitems' => 1,
                'size' => 1,
                'minitems' => 0,
                'show_thumbs' => 1,
                'wizards' => [
                    'suggest' => [
                        'type' => 'suggest',
                    ],
                ],
            ],
        ],

        'discography' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],

        'discography_release' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
