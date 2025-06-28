<?php

if(isset($_POST['addadmin'])) {
	$firstname = sanVar($_POST['firstname']);
	$lastname = sanVar($_POST['lastname']);
	$username = sanVar($_POST['username']);
	$password = sanVar($_POST['password']);

	$getAdmin = new Controller();
	$getAdmin->getAdmin($firstname, $lastname, $username, $password);
}

?>