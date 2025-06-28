<?php

if (isset($_GET['logout'])) {
	session_destroy();
	header('Location: ./control.php');
}

if (!isset($_SESSION['id'])) {
	header('Location: ./control.php');
}