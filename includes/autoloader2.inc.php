<?php
//declare (strict_type = 1);
session_start();
spl_autoload_register('myAutoloader');

function myAutoloader($className) {
	include "../classes/". $className .".class.php";
}

function sanVar($input) {
	$input = stripslashes($input);
	$input = trim($input);
	return $input;
}


 if (!isset($_COOKIE['dailyvisitor'])) {
 	setcookie('dailyvisitor', 'visited', strtotime("tomorrow"), '/');
 	$dailyVisit = new Controller();
 	$dailyVisit->dailyVisit();
 }

 if (!isset($_COOKIE['monthlyvisitor'])) {
 	setcookie('monthlyvisitor', 'visited', strtotime("last second last day of this month"), '/');
 	$monthlyVisit = new Controller();
 	$monthlyVisit->monthlyVisit();
 }

 if (isset($_GET['pol'])) {
 	$_SESSION['cati'] = $_GET['pol'];
 	header("Location: ./control.php");
 }
 if (isset($_GET['dev'])) {
 	$_SESSION['cati'] = $_GET['dev'];
 	header("Location: ./control.php");
 }
 if (isset($_GET['spo'])) {
 	$_SESSION['cati'] = $_GET['spo'];
 	header("Location: ./control.php");
 }
 if (isset($_GET['wor'])) {
 	$_SESSION['cati'] = $_GET['wor'];
 	header("Location: ./control.php");
 }
 if (isset($_GET['tec'])) {
 	$_SESSION['cati'] = $_GET['tec'];
 	header("Location: ./control.php");
 }
 if (isset($_GET['edu'])) {
 	$_SESSION['cati'] = $_GET['edu'];
 	header("Location: ./control.php");
 }
 if (isset($_GET['art'])) {
 	$_SESSION['cati'] = $_GET['art'];
 	header("Location: ./control.php");
 }
 if (isset($_GET['lif'])) {
 	$_SESSION['cati'] = $_GET['lif'];
 	header("Location: ./control.php");
 }