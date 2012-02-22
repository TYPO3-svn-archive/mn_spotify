<?php

########################################################################
# Extension Manager/Repository config file for ext "mn_spotify".
#
# Auto generated 22-02-2012 08:59
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Spotify',
	'description' => 'Search and get playlist for Spotify directly from your website.',
	'category' => 'plugin',
	'author' => 'Mattias Nilsson',
	'author_email' => 'tollepjaer@gmail.com',
	'author_company' => '',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
			't3jquery' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:26:{s:21:"ExtensionBuilder.json";s:4:"9512";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"98df";s:14:"ext_tables.php";s:4:"198d";s:14:"ext_tables.sql";s:4:"8eec";s:40:"Classes/Controller/SpotifyController.php";s:4:"aee4";s:32:"Classes/Domain/Model/Spotify.php";s:4:"7f75";s:47:"Classes/Domain/Repository/SpotifyRepository.php";s:4:"e9a2";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"3dc3";s:29:"Configuration/TCA/Spotify.php";s:4:"6ed9";s:38:"Configuration/TypoScript/constants.txt";s:4:"1c95";s:34:"Configuration/TypoScript/setup.txt";s:4:"ec1b";s:17:"Eid/send_mail.php";s:4:"af3d";s:40:"Resources/Private/Language/locallang.xml";s:4:"6397";s:78:"Resources/Private/Language/locallang_csh_tx_mnspotify_domain_model_spotify.xml";s:4:"b93f";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"a3a6";s:38:"Resources/Private/Layouts/Default.html";s:4:"d682";s:42:"Resources/Private/Partials/FormErrors.html";s:4:"f5bc";s:50:"Resources/Private/Partials/Spotify/FormFields.html";s:4:"caba";s:50:"Resources/Private/Partials/Spotify/Properties.html";s:4:"3e6c";s:45:"Resources/Private/Templates/Spotify/List.html";s:4:"c0a7";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:60:"Resources/Public/Icons/tx_mnspotify_domain_model_spotify.gif";s:4:"905a";s:47:"Tests/Unit/Controller/SpotifyControllerTest.php";s:4:"d11b";s:39:"Tests/Unit/Domain/Model/SpotifyTest.php";s:4:"d010";s:14:"doc/manual.sxw";s:4:"034a";}',
);

?>