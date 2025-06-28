<?php
require_once 'includes/autoloader.inc.php';
require 'includes/viewhelper.inc.php';
$_SESSION['news_category']  = "Home";
?>
<!DOCTYPE html>
<html>
<head>
	<title>TarabaExpress</title>
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="stylesheet" href="styles/style.css">
	<meta name="theme-color" content="#8b0000">
	<meta property="og:image" content="https://tarabaexpress.com.ng/newspic/gala.bmp"/>
	<meta property="og:title" content="Get latest news on TarabaExpress"/>
	<meta property="og:description" content="Never miss out on trending latest news around the worldng"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,300;1,6..72,300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet">
<style>
	.news-slider {position: relative; width: 100%; height: 250px; margin: 5px 0 10px 0;}
	.news-slider img {width: 100%; height: 250px;}
	.slider-title {position: absolute; bottom: 0; left: 0; padding: 0 2px;}

	mark {background: #ffffff; color: darkred; padding: 0 5px; line-height: 30px; font-family: "Gowun Batang", serif; font-weight: 700; font-style: normal;}
</style>
</head>
<body>
	<div class="nav">
		<div class="nav1"><span class="logo">TarabaExpress</span></div>
		<div class="nav2"><!--<a href="https://www.facebook.com/sharer.php?u=https://tarabaexpress.com.ng/index.php" class="cat-butt"><span class="material-icons">facebook</span><small>Share</small></a><a href="article.php" class="cat-butt"><span class="material-icons">assignment</span><small>Article</small></a>--></div>
	</div>
	<div class="mother">
		<div class="child1">
			<div class="cat-nav"><span class="highlight"></span><a href="#">Home</a><a href="development">News</a><a href="world">World</a><a href="sport">Sport</a><a href="politics.php">Politics</a><a href="education.php">Education</a><a href="lifestyle.php">Lifestyle</a><a href="technology.php">Tech</a></div>
			<?php L(0, 0); include 'components/slider.com.php'?>
			<?php L(2, 0); include 'components/headline.com.php'?>
			<?php L(4, 2); include 'components/horizontalnews.com.php'?>
			<?php L(3, 6); include 'components/headline.com.php'?>	
			<?php L(2, 9); include 'components/hyperlink.com.php'?>	
			<?php L(2, 11); include 'components/headline.com.php'?>
			<?php L(4, 13); include 'components/horizontalnews.com.php'?>
			<?php L(4, 17); include 'components/horizontalnews.com.php'?>
			<?php L(3, 21); include 'components/hyperlink.com.php'?>
			<?php L(2, 24); include 'components/headline.com.php'?>
			<?php L(5, 26); include 'components/hyperlink.com.php'?>

		</div>
		<div class="child2">
				<?php L(10, 0); include 'components/sidenews.com.php'?>
		</div>
	</div>
	<div class="marquee">
		<div id="footer-ads"><div><span>&times;</span><img src="adsbanner/mini.jpg"></div></div>
		<?php L(13, 0); include 'components/marquee.com.php'?>
	</div>
	<?php L(5, 0); include 'components/footer.com.php'?>
</body>
</html>