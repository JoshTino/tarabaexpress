<?php

class Database {
	/*
	private $servername = "wgh5.whogohost.com";
	private $username = "galanews_root";
	private $password = "jdboy355995899";
	private $dbname = "galanews_db";
	*/
	private $servername = "localhost";
	private $username = "root";
	private $password = 995899;
	private $dbname = "jalanews";
	

	protected function conn() {
		return $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
	}
}
?>