<?php
require_once 'includes/autoloader.inc.php';
//require_once 'includes/click.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>TarabaExpress- Faith, Science & Reasoning</title>
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="stylesheet" href="styles/style.css">
	<meta name="theme-color" content="#2f4959">
	<meta property="og:image" content="https://tarabaexpress.com.ng/newspic/gala.bmp"/>
	<meta property="og:title" content="Faith, Science, Fact & Reasoning"/>
	<meta property="og:description" content="Study how science, faith, facts and reasoning impacts our day-to-day lives"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
	<div class="nav">
		<div class="nav1"><span class="logo">TarabaExpress</span></div>
		<div class="nav2"><a href="https://www.facebook.com/sharer.php?u=https://tarabaexpress.com.ng/article.php" class="cat-butt"><span class="material-icons">facebook</span><small>Share</small></a><a href="article.php" class="cat-butt"><span class="material-icons">assignment</span><small>Article</small></a></div>
	</div>
	<div class="mother">
		<div class="child1">
			<div class="cat-nav"><a href="index.php">Latest</a><a href="world.php">World</a><a href="politics.php">Politics</a><a href="sport.php">Sport</a><a href="development.php">Development</a><a href="education.php">Education</a><a href="lifestyle.php">Lifestyle</a><a href="technology.php">Tech</a></div>
			<div class="baby">
			<?php
			$category = 'Article';
			$setHeadlines = new View();
			$setHeadlines->setHeadlines($category);
			?>
			</div>
		</div>
		<div class="child2">
			<div class="stable">
				<?php
				$setSideNews = new View();
				$setSideNews->setSideNews();
				?>
			</div>
		</div>
	</div>
	<div class="marquee">
		<div id="footer-ads"><div><span>&times;</span><img src="adsbanner/1393564807903828032.gif"></div></div>
		<marquee>
			<?php
			$setMarquee = new View();
			$setMarquee->setMarquee();
			?>
		</marquee>
	</div>

	<div class="footer">
		<div class="top-news">
			<h4>Top 5 news</h4>
			<?php
			$setLinkNews = new View();
			$setLinkNews->setLinkNews();
			?>
		</div>
		<div class="about-us">
			<h4>About Us</h4>
			<p>We bring to you latest breaking news at your fingertip, be it international, local or political news, thousands of people come back to TarabaExpress for more</p>
		</div>
		<div class="contact-us">
			<h4>Contact Us</h4>
			<a href="mailto:galanewsng@gmail.com">Email us: galanewsng@gmail.com</a>
			<a href="mailto:galanewsng@yahoo.com">Email us: galanewsng@yahoo.com</a><br>
			<a href="tel:09122496966">Call us at: 09122496966</a>
			<a href="tel:09045593809">Call us at: 09045593809</a>
		</div>
	</div>
</body>
</html>