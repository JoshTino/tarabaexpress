<?php

 if(isset($_POST['changedetail'])) {
 	$username = sanVar($_POST['username']);
 	$newpass = sanVar($_POST['newpassword']);
 	$confirmnew = sanVar($_POST['confirmnew']);
 	$verifyold = sanVar($_POST['verifyold']);
 	$id = $_SESSION['id'];

 	if (!empty($username) && !empty($newpass) && !empty($confirmnew) && !empty($verifyold)) {
 		if ($newpass == $confirmnew) {
 			$getChanges = new Controller();
 			$getChanges->getChanges($username, $verifyold, $newpass, $id);
 		}
 	}
 }
?>