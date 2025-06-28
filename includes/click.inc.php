<?php
if (isset($_GET['detail'])) {
	$_SESSION['newsID'] = $_GET['detail'];
	$_SESSION['page'] = $_GET['page'];
	$newsID = $_SESSION['newsID'];
	//$getViews = new Controller();
	//$getViews->getViews($newsID);
	$page = $_SESSION['page'];
	header("Location: ./$page");
}

$getDirectViews = new Controller();
$getDirectViews->getDirectViews($idtt);
?>