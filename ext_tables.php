<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Static TS
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Short News URLs');

$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['switchableControllerActions']['newItems']['News->detail;News->list'] = 'List & Detail (pretty URLs)';
$GLOBALS['TYPO3_CONF_VARS']['BE']['XCLASS']['ext/news/Classes/Hooks/T3libBefunc.php'] = t3lib_extMgm::extPath('shortnewsurl') . 'Classes/XClass/T3libBefunc.php';

?>