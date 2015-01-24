<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_diskographie_domain_model_releases'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_diskographie_domain_model_releases']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, primary_release, title, publication_date, description, cover, discs, label_number, country, rarity, track_list',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, primary_release, title, publication_date, description;;;richtext:rte_transform[mode=ts_links], cover, discs, label_number, country, rarity, track_list, '),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_diskographie_domain_model_releases',
				'foreign_table_where' => 'AND tx_diskographie_domain_model_releases.pid=###CURRENT_PID### AND tx_diskographie_domain_model_releases.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),

		'primary_release' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_releases.primary_release',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_releases.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'publication_date' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_releases.publication_date',
			'config' => array(
				'type' => 'input',
				'size' => 7,
				'eval' => 'date',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_releases.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'cover' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_releases.cover',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'cover',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'discs' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_releases.discs',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'label_number' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_releases.label_number',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'country' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_releases.country',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'rarity' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_releases.rarity',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'track_list' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_releases.track_list',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_diskographie_domain_model_tracks',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		
		'discography' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);
