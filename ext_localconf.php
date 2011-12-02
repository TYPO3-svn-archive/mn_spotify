<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(
		'Spotify' => 'list',
		
	),
	// non-cacheable actions
	array(
		'Spotify' => 'list',
		
	)
);

$TYPO3_CONF_VARS['FE']['eID_include']['mn_spotify'] = 'EXT:mnspotify/Eid/send_mail.php';

?>