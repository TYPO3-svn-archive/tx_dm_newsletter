<?php

define('TYPO3_MOD_PATH', '../typo3conf/ext/tx_dm_newsletter/mod1/');
$BACK_PATH='../../../../typo3/';
	// DO NOT REMOVE OR CHANGE THESE 2 LINES:
$MCONF['name'] = 'txdirectmailM1_txdmnewsletterM1';
$MCONF['script'] = '_DISPATCH';
	
$MCONF['access'] = 'user,group';

$MLANG['default']['tabs_images']['tab'] = 'moduleicon.gif';
$MLANG['default']['ll_ref'] = 'LLL:EXT:tx_dm_newsletter/mod1/locallang_mod.xml';

$MCONF['access'] = 'user,group';
$MCONF['script']='index.php';

$MCONF['workspaces'] = 'online'
?>