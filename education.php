<?php
require_once 'includes/autoloader.inc.php';
require 'includes/viewhelper.inc.php';
$_SESSION['news_category']  = "Education";
?>
<!DOCTYPE html>
<html>
<head>
	<title>TarabaExpress- Education news</title>
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="stylesheet" href="styles/style.css">
	<meta name="theme-color" content="#8b0000">
	<meta property="og:image" content="https://tarabaexpress.com.ng/newspic/gala.bmp"/>
	<meta property="og:title" content="Get latest news on educational matters"/>
	<meta property="og:description" content="Be first to get updates on the latest educational news and come back for more"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,300;1,6..72,300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="nav">
		<div class="nav1"><span class="logo">TarabaExpress</span></div>
		<div class="nav2"><!--<a href="https://www.facebook.com/sharer.php?u=https://tarabaexpress.com.ng/education.php" class="cat-butt"><span class="material-icons">facebook</span><small>Share</small></a><a href="article.php" class="cat-butt"><span class="material-icons">assignment</span><small>Article</small></a>--></div>
	</div>
	<div class="mother">
		<div class="child1">
			<div class="cat-nav"><span class="highlight"></span><a href="#">Education</a><a href="index.php">Latest</a><a href="world.php">World</a><a href="sport.php">Sport</a><a href="politics.php">Politics</a><a href="development.php">Development</a><a href="lifestyle.php">Lifestyle</a><a href="technology.php">Tech</a></div>
			<?php L(4, 0); include 'components/horizontalnews.com.php'?>
			<?php l(2, 4); include 'components/headline.com.php';?>
			<?php L(3, 6); include 'components/hyperlink.com.php';?>
			<?php L(4, 9); include 'components/horizontalnews.com.php'?>											
		</div>
		<div class="child2">
				<?php include 'components/sidenews.com.php'?>
		</div>
	</div>
	<div class="marquee">
		<div id="footer-ads"><div><span>&times;</span><img src="adsbanner/mini.jpg"></div></div>
		<?php include 'components/marquee.com.php'?>
	</div>
	<?php include 'components/footer.com.php'?>
</body>
</html>