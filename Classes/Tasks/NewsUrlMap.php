<?php

class Tx_Shortnewsurl_Tasks_NewsUrlMap extends tx_scheduler_Task {

	/**
	 * @return bool
	 */
	public function execute() {
		if (!t3lib_extMgm::isLoaded('pagepath')) {
			t3lib_FlashMessageQueue::addMessage(new t3lib_FlashMessage('Required Extension pagepath is not installed.', 'Error. Map was not created', t3lib_FlashMessage::ERROR));
			return TRUE;
		}
		/** @var t3lib_DB $databaseConnection */
		$databaseConnection = $GLOBALS['TYPO3_DB'];
		$res = $databaseConnection->exec_SELECT_mm_query(
			'tt_news.uid, tt_news_cat.single_pid',
			'tt_news',
			'tt_news_cat_mm',
			'tt_news_cat',
			'tt_news.deleted = 0'
		);
		$items = array();
		while($item = $databaseConnection->sql_fetch_assoc($res)) {
			$item['url'] = tx_pagepath_api::getPagePath($item['single_pid'], array('tt_news' => array('uid' =>intval($item['uid']))));
			$items[] = $item;
		}
		if (count($items) == 0) {
			t3lib_FlashMessageQueue::addMessage(new t3lib_FlashMessage('No news records were found.', 'Map was not created', t3lib_FlashMessage::WARNING));
			return TRUE;
		}
		$outputFilePath = PATH_site . 'typo3temp/urlmap.csv';
		$fh = fopen($outputFilePath, 'w');
		fputcsv($fh, $items);
		fclose($fh);
		t3lib_FlashMessageQueue::addMessage(new t3lib_FlashMessage('<a href="/typo3temp/urlmap.csv" target="_blank">Download map</a> containing ' . count($items) . ' records.', 'Url map created', t3lib_FlashMessage::OK));
		return TRUE;
	}

}

?>