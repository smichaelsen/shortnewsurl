<?php

// reverse detail and list as default action
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['extbase']['extensions']['News']['plugins']['Pi1']['controllers']['News']['actions'][0] = 'detail';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['extbase']['extensions']['News']['plugins']['Pi1']['controllers']['News']['actions'][1] = 'list';

// scheduler tasks
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['Tx_Shortnewsurl_Tasks_NewsUrlMap'] = array(
	'extension' => $_EXTKEY,
	'title' => 'Create News Url Map',
	'description' => 'Create News Url Map',
);

?>