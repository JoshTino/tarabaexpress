<?php

if (isset($_GET['edit'])) {
	$_SESSION['edit_id'] = $_GET['edit'];
	$_SESSION['changepage'] = $_GET['changepage'];
	$_SESSION['idtt'] = $_GET['idtt'];
	header("Location: ./edit.php");
}

if (isset($_POST['update'])) {
	$title = sanVar($_POST['title']);
	$idtt = $_SESSION['idtt'];
	$category = sanVar($_POST['category']);
	$body = $_POST['body'];
	$file = $_FILES['pic']['tmp_name'];
	$editId = $_SESSION['edit_id'];
	$getUpdate = new Controller();
	$getUpdate->getUpdate($title, $category, $body, $file, $editId);

$new_body = str_ireplace("
", "<br/>", $body);
$url = $_SESSION['changepage'];
$editFile = fopen($url, "w");
fwrite($editFile,
'<?php $idtt = '."$idtt;".'?>
'.
"<?php include '../includes/detailup.inc.php';?>".
"<h2>$title</h2>".
'<?php $setImage = new View();?>'.
'<?php $setDetailDate = new View();?>'.
"<div><small><?php".' echo $setDetailDate->setDetailDate($idtt)'.";?></small></div>".
"<img src='../news img <?php".' $setImageDate->setImageDate($idtt);?>'."/<?php".' echo $setImage->setImage($idtt);?>'."'>".
"<p>$new_body</p>".
"<?php include '../includes/detaildown.inc.php';?>
");
fclose($editFile);
}
?>