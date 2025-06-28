<?php
$username = "";
$password = "";

if (isset($_POST['login'])) {
	$username = sanVar($_POST['username']);
	$password = sanVar($_POST['password']);
	$getLogin = new Controller();
	$getLogin->getLogin($username, $password);
}

?>