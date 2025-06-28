<?php

class View extends Model {

	public function setAdminDetail($id, $col) {
		$row = $this->getAdminDetail($id);
		
		return $row[$col];
	}

	public function setOwnerNews(){
		return $this->getOwnerNews();
	}

	public function setNews($editId, $col) {
		$row = $this->getNews($editId);
		return $row[$col];
	}

	public function setSocials($editId) {
		$this->getSocials($editId);
	}

	public function setImage($idtt) {
		$this->getImage($idtt);
	}

	public function setSlider(int $limit, int $offset) {
		return $this->getSlider($limit, $offset);
	}

	public function setHeadlines(int $limit, int $offset) {
		return $this->getHeadlines($limit, $offset);
	}


	public function setHorizontalNews(int $limit, int $offset) {
		return $this->getHorizontalNews($limit, $offset);
	}

	public function setHyperlink(int $limit, int $offset) {
		return $this->getHyperlink($limit, $offset);
	}

	public function setDetailDate($idtt) {
		$day = $this->detailDate($idtt);
		return $day;
	}

	public function setImageDate($idtt) {
		$this->imageDate($idtt);
	}

	public function setMetaContent($column, $idtt) {
		$this->getMetaContent($column, $idtt);
	}

	public function setSideNews(int $limit, $offset) {
		return $this->getSideNews($limit, $offset);
	}

	public function setLinkNews(int $limit, int $offset) {
		return $this->getLinkNews($limit, $offset);
	}

	public function setMarquee(int $limit, int $offset) {
		return $this->getMarquee($limit, $offset);
	}

	public function adminCount() {
		$this->getAdminCount();
	}

	public function dailyVisitors() {
		$this->getDailyVisitors();
	}

	public function monthlyVisitors() {
		$this->getMonthlyVisitors();
	}

	public function adminTrending() {
		$this->getAdminTrending();
	}

	public function totalPost($id) {
		$this->getTotalPost($id);
	}
}
?>