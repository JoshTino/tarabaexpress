<?php
require_once '../includes/autoloader2.inc.php';
require_once '../includes/click.inc.php';
require '../includes/viewhelper.inc.php';

$title = new View();
$setImageDate = new View();

$ogimg = new View();
$ogtitle = new View();
$ogdesc = new View();
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php $title->setMetaContent('Title', $idtt)?></title>
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="stylesheet" href="../styles/style.css">
	<meta name="theme-color"  content="#2f4959">
	<meta property="og:image" content="https://tarabaexpress.com.ng/news img <?php $setImageDate->setImageDate($idtt);?>/<?php $ogimg->setMetaContent('Image', $idtt)?>"/>
	<meta property="og:title" content="<?php $ogtitle->setMetaContent('Title', $idtt)?>"/>
	<meta property="og:description" content="<?php $ogdesc->setMetaContent('Body', $idtt)?>"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,300;1,6..72,300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="nav">
		<div class="nav1"><span class="logo">TarabaExpress</span></div>
		<div class="nav2"><!--<a href="https://www.facebook.com/sharer.php?u=https://tarabaexpress.com.ng<?php echo $_SERVER['PHP_SELF']?>" class="cat-butt"><span class="material-icons">facebook</span><small>Share</small></a><a href="../article.php" class="cat-butt"><span class="material-icons">assignment</span><small>Article</small></a>--></div>
	</div>
	<div class="mother">
		<div class="child1">
			<div class="cat-nav"><a href="../index.php">Latest</a><a href="../world.php">World</a><a href="../sport.php">Sports</a><a href="../politics.php">Politics</a><a href="../development.php">Development</a><a href="../education.php">Education</a><a href="../lifestyle.php">Lifestyle</a><a href="../technology.php">Tech</a></div>
			<div class="detail-box">