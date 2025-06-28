<?php

class Controller extends Model {
	public function getLogin(string $username, string $password) {
		$this->setLogin($username, $password);
	}

	public function getPost(string $title, $idtt, string $category, string $body, $file, $url, $id) {
		$this->setPost($title, $idtt, $category, $body, $file, $url, $id);
	}

	public function getViews($newsID) {
		$this->setViews($newsID);
	}

	public function getDirectViews($idtt) {
		$this->setDirectViews($idtt);
	}

	public function getDelete($deleteId) {
		$this->setDelete($deleteId);
	}

	public function getUpdate(string $title, string $category, string $body, $file, $editId) {
		$this->setUpdate($title, $category, $body, $file, $editId);
	}

	public function getChanges(string $username, string $verifyold, string $newpass, $id) {
		$this->setChanges($username, $verifyold, $newpass, $id);
	}

	public function getAdmin(string $firstname, string $lastname, string $username, string $password) {
		$this->setAdmin($firstname, $lastname, $username, $password);
	}

	public function dailyVisit() {
		$this->setDailyVisit();
	}

	public function monthlyVisit() {
		$this->setMonthlyVisit();
	}
}
?>