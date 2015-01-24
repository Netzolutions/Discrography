<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'Discography'
);

if (TYPO3_MODE === 'BE') {

	/**
	 * Registers a Backend Module
	 */
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'Netzcript.' . $_EXTKEY,
		'web',	 // Make module a submodule of 'web'
		'discography',	// Submodule key
		'',						// Position
		array(
			'Discography' => 'list, new, create, delete',
			
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_discography.xlf',
		)
	);

}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Discography');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_diskographie_domain_model_discography', 'EXT:diskographie/Resources/Private/Language/locallang_csh_tx_diskographie_domain_model_discography.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_diskographie_domain_model_discography');
$GLOBALS['TCA']['tx_diskographie_domain_model_discography'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_discography',
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
		'enablecolumns' => array(
			'disabled' => 'hidden',

		),
		'searchFields' => 'title,artists,release_type,phonogram_type,releases,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Discography.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_diskographie_domain_model_discography.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_diskographie_domain_model_releasetype', 'EXT:diskographie/Resources/Private/Language/locallang_csh_tx_diskographie_domain_model_releasetype.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_diskographie_domain_model_releasetype');
$GLOBALS['TCA']['tx_diskographie_domain_model_releasetype'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_releasetype',
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
		'enablecolumns' => array(
			'disabled' => 'hidden',

		),
		'searchFields' => 'title,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/ReleaseType.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_diskographie_domain_model_releasetype.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_diskographie_domain_model_phonogramtype', 'EXT:diskographie/Resources/Private/Language/locallang_csh_tx_diskographie_domain_model_phonogramtype.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_diskographie_domain_model_phonogramtype');
$GLOBALS['TCA']['tx_diskographie_domain_model_phonogramtype'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_phonogramtype',
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
		'enablecolumns' => array(
			'disabled' => 'hidden',

		),
		'searchFields' => 'title,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/PhonogramType.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_diskographie_domain_model_phonogramtype.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_diskographie_domain_model_releases', 'EXT:diskographie/Resources/Private/Language/locallang_csh_tx_diskographie_domain_model_releases.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_diskographie_domain_model_releases');
$GLOBALS['TCA']['tx_diskographie_domain_model_releases'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_releases',
		'label' => 'primary_release',
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
		'enablecolumns' => array(
			'disabled' => 'hidden',

		),
		'searchFields' => 'primary_release,title,publication_date,description,cover,discs,label_number,country,rarity,track_list,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Releases.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_diskographie_domain_model_releases.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_diskographie_domain_model_tracks', 'EXT:diskographie/Resources/Private/Language/locallang_csh_tx_diskographie_domain_model_tracks.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_diskographie_domain_model_tracks');
$GLOBALS['TCA']['tx_diskographie_domain_model_tracks'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_tracks',
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
		'enablecolumns' => array(
			'disabled' => 'hidden',

		),
		'searchFields' => 'title,time,description,lyrics,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Tracks.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_diskographie_domain_model_tracks.gif'
	),
);

if (!isset($GLOBALS['TCA']['tx_lyrics_domain_model_artists']['ctrl']['type'])) {
	if (file_exists($GLOBALS['TCA']['tx_lyrics_domain_model_artists']['ctrl']['dynamicConfigFile'])) {
		require_once($GLOBALS['TCA']['tx_lyrics_domain_model_artists']['ctrl']['dynamicConfigFile']);
	}
	// no type field defined, so we define it here. This will only happen the first time the extension is installed!!
	$GLOBALS['TCA']['tx_lyrics_domain_model_artists']['ctrl']['type'] = 'tx_extbase_type';
	$tempColumns = array();
	$tempColumns[$GLOBALS['TCA']['tx_lyrics_domain_model_artists']['ctrl']['type']] = array(
		'exclude' => 1,
		'label'   => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie.tx_extbase_type',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('Default','1')
			),
			'size' => 1,
			'maxitems' => 1,
		)
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_lyrics_domain_model_artists', $tempColumns, 1);
}

if (!isset($GLOBALS['TCA']['tx_lyrics_domain_model_lyrics']['ctrl']['type'])) {
	if (file_exists($GLOBALS['TCA']['tx_lyrics_domain_model_lyrics']['ctrl']['dynamicConfigFile'])) {
		require_once($GLOBALS['TCA']['tx_lyrics_domain_model_lyrics']['ctrl']['dynamicConfigFile']);
	}
	// no type field defined, so we define it here. This will only happen the first time the extension is installed!!
	$GLOBALS['TCA']['tx_lyrics_domain_model_lyrics']['ctrl']['type'] = 'tx_extbase_type';
	$tempColumns = array();
	$tempColumns[$GLOBALS['TCA']['tx_lyrics_domain_model_lyrics']['ctrl']['type']] = array(
		'exclude' => 1,
		'label'   => 'LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie.tx_extbase_type',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('Default','1')
			),
			'size' => 1,
			'maxitems' => 1,
		)
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_lyrics_domain_model_lyrics', $tempColumns, 1);
}

$GLOBALS['TCA']['tx_lyrics_domain_model_lyrics']['types']['Tx_Diskographie_Lyrics']['showitem'] = $TCA['tx_lyrics_domain_model_lyrics']['types']['1']['showitem'];
$GLOBALS['TCA']['tx_lyrics_domain_model_lyrics']['types']['Tx_Diskographie_Lyrics']['showitem'] .= ',--div--;LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_lyrics,';
$GLOBALS['TCA']['tx_lyrics_domain_model_lyrics']['types']['Tx_Diskographie_Lyrics']['showitem'] .= '';

$GLOBALS['TCA']['tx_lyrics_domain_model_lyrics']['columns'][$TCA['tx_lyrics_domain_model_lyrics']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_lyrics_domain_model_lyrics.tx_extbase_type.Tx_Diskographie_Lyrics','Tx_Diskographie_Lyrics');

$GLOBALS['TCA']['tx_lyrics_domain_model_artists']['types']['Tx_Diskographie_Artists']['showitem'] = $TCA['tx_lyrics_domain_model_artists']['types']['1']['showitem'];
$GLOBALS['TCA']['tx_lyrics_domain_model_artists']['types']['Tx_Diskographie_Artists']['showitem'] .= ',--div--;LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_diskographie_domain_model_artists,';
$GLOBALS['TCA']['tx_lyrics_domain_model_artists']['types']['Tx_Diskographie_Artists']['showitem'] .= '';

$GLOBALS['TCA']['tx_lyrics_domain_model_artists']['columns'][$TCA['tx_lyrics_domain_model_artists']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:diskographie/Resources/Private/Language/locallang_db.xlf:tx_lyrics_domain_model_artists.tx_extbase_type.Tx_Diskographie_Artists','Tx_Diskographie_Artists');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_lyrics_domain_model_artists', $GLOBALS['TCA']['tx_lyrics_domain_model_artists']['ctrl']['type'],'','after:' . $TCA['tx_lyrics_domain_model_artists']['ctrl']['label']);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_lyrics_domain_model_lyrics', $GLOBALS['TCA']['tx_lyrics_domain_model_lyrics']['ctrl']['type'],'','after:' . $TCA['tx_lyrics_domain_model_lyrics']['ctrl']['label']);
