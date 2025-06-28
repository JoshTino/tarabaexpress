<?php

class Database {
	
	private $servername = "localhost";
	private $username = "root";
	private $password = 995899;
	private $dbname = "jalanews";
	

	protected function conn() {
		return $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
	}
}
?>