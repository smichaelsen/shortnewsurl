<?php

class Tx_Shortnewsurl_Controller_NewsController extends Tx_News_Controller_NewsController {

	/**
	 * Single view of a news record
	 *
	 * @param Tx_Kfinewsapi_Domain_Model_News $news news item
	 * @param integer $currentPage current page for optional pagination
	 * @return void
	 */
	public function detailAction(Tx_Kfinewsapi_Domain_Model_News $news = NULL, $currentPage = 1) {

		if (is_null($news) && !$this->settings['singleNews']) {
			$this->forward('list');
		} else {
			parent::detailAction($news, $currentPage);
		}
	}

}

?>