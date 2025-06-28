<?php

if (isset($_GET['delete'])) {
	$deleteId = $_COOKIE['todelete'];
	$getDelete = new Controller();
	$getDelete->getDelete($deleteId);

	$url = $_COOKIE['tounlink'];
	$img = $_COOKIE['unlinkimg'];
	unlink($img);
	unlink($url);
}
?>