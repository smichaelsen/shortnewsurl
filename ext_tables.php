<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Static TS
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Short News URLs');

// exchange the flexform (no switchableControllerActions)
t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['columns']['pi_flexform']['config']['ds']['news_pi1,list'] = 'FILE:EXT:shortnewsurl/Configuration/FlexForms/flexform_news.xml';

?>