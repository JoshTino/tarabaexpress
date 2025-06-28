<?php
if (isset($_POST['post'])) {
	$title = sanVar($_POST['title']);
	$idtt = rand(10000, 99000);
	$category = sanVar($_POST['category']);
	$body = $_POST['body'];
	$file = $_FILES['pic']['tmp_name'];
	$id = $_SESSION['id'];
	$url = str_replace(',', '', $title);
	$url = str_replace('?', '', $url);
	$url = str_replace(':', '', $url.".php");
	$url = trim(str_replace(' ', '-', $url));
	$url = strtolower($url);
	$getPost = new Controller();
	$getPost->getPost($title, $idtt, $category, $body, $file, $url, $id);

	//Directory year name
	$d_yearName = date("Y-m");
	if (file_exists($d_yearName)) {
$new_body = str_ireplace("
", "<br/>", $body);
	$newFile = fopen("$d_yearName/$url", "w");
	fwrite($newFile,
'<?php $idtt = '."$idtt;".'?>
'.
"<?php include '../includes/detailup.inc.php';?>".
"<h2>$title</h2>".
'<?php $setImage = new View();?>'.
'<?php $setDetailDate = new View();?>'.
'<?php $setImageDate = new View();?>'.
"<div><small><?php".' echo $setDetailDate->setDetailDate($idtt)'.";?></small></div>".
"<img src='../news img <?php".' $setImageDate->setImageDate($idtt);?>'."/<?php".' echo $setImage->setImage($idtt);?>'."'>".
"<p>$new_body</p>".
"<?php include '../includes/detaildown.inc.php';?>");
fclose($newFile);		
	} else {
		mkdir($d_yearName);
$new_body = str_ireplace("
", "<br/>", $body);
	$newFile = fopen("$d_yearName/$url", "w");
	fwrite($newFile,
'<?php $idtt = '."$idtt;".'?>
'.
"<?php include '../includes/detailup.inc.php';?>".
"<h2>$title</h2>".
'<?php $setImage = new View();?>'.
'<?php $setDetailDate = new View();?>'.
'<?php $setImageDate = new View();?>'.
"<div><small><?php".' echo $setDetailDate->setDetailDate($idtt)'.";?></small></div>".
"<img src='../news img <?php".' $setImageDate->setImageDate($idtt);?>'."/<?php".' echo $setImage->setImage($idtt);?>'."'>".
"<p>$new_body</p>".
"<?php include '../includes/detaildown.inc.php';?>");
fclose($newFile);
}
	
/*$new_body = str_ireplace("
", "<br/>", $body);
	$newFile = fopen($url, "w");
	fwrite($newFile,
'<?php $idtt = '."$idtt;".'?>
'.
"<?php include 'includes/detailup.inc.php';?>".
"<h2>$title</h2>".
'<?php $setImage = new View();?>'.
'<?php $setDetailDate = new View();?>'.
"<div><small><?php".' echo $setDetailDate->setDetailDate($idtt)'.";?></small></div>".
"<img src='newspic/<?php".' echo $setImage->setImage($idtt);?>'."'>".
"<p>$new_body</p>".
"<?php include 'includes/detaildown.inc.php';?>");
fclose($newFile);*/
}