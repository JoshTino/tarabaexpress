<?php
require_once 'includes/autoloader.inc.php';
$newsID = $_SESSION['newsID'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jala News</title>
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="stylesheet" href="styles/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>
<body>
	<div class="nav">
		<div class="nav1"><span class="logo">jalaNews</span></div>
		<div class="nav2"><a href="https://www.facebook.com/sharer.php?u=localhost/Rough/index.php" class="cat-butt"><span class="material-icons">facebook</span><small>Share</small></a><a href="" class="cat-butt"><span class="material-icons">assignment</span><small>Article</small></a></div>
	</div>
	<div class="mother">
		<div class="child1">
			<div class="cat-nav"><a href="index.php">Local</a><a href="international.php">International</a><a href="political.php">Political</a><a href="development.php">Development</a><a href="education.php">Education</a><a href="technology.php">Technology</a></div>
		<?php
		$setDetail = new View();
		$setDetail->setDetail($newsID);
		?>
		</div>
		<div class="child2">
			<div class="stable">
				<div>
					<h5>Oyo re-run election</h5>
					<p>The edo state election was successfully completed, despite anticipation of the possibility of violence</p>
				</div>
				<div>
					<h5>End SARS protest in lugbe</h5>
					<p>The edo state election was successfully completed, despite anticipation of the possibility of violence</p>
				</div>
				<div>
					<h5>Schools to be re-opened 12 october</h5>
					<p>The edo state election was successfully completed, despite anticipation of the possibility of violence</p>
				</div>
				<div>
					<h5>ASUS end nationwide strike</h5>
					<p>The edo state election was successfully completed, despite anticipation of the possibility of violence</p>
				</div>
			</div>
		</div>
	</div>
		<div class="marquee">
		<marquee>
			<?php
			$setMarquee = new View();
			$setMarquee->setMarquee();
			?>
		</marquee>
	</div>
	<div class="footer">
		<div class="top-news">
			<h4>Top 10 news</h4>
			<a href="">Ondo state election commences today..</a>
			<a href="">EFCC appoints new chairman</a>
			<a href="">End SARS protest in lagos</a>
			<a href="">INEC to cancel Abia state LGA election</a>
			<a href="">Ondo state election commences today..</a>
			<a href="">EFCC appoints new chairman</a>
			<a href="">INEC to cancel Abia state LGA election</a>
			<a href="">Ondo state election commences today..</a>
			<a href="">New water project flaged up in Taraba state..</a>
			<a href="">Ondo state election commences today..</a>
		</div>
		<div class="about-us">
			<h4>About Us</h4>
			<p>We bring to you latest breaking news at your fingertip, be it international, local or political news, thousands of people come back to jalaNews for more</p><br>
			<p>You too can now report latest happenings or events to jalaNews by clicking on the blue button below your screen. Fill in the form correctly and submit your report. Report will be reviewed by news Team and approved if valid..</p>
		</div>
		<div class="contact-us">
			<h4>Contact Us</h4>
			<a href="">Email us: jalanews@gmail.com</a>
			<a href="">Email us: jalanews@yahoo.com</a><br>
			<a href="email:09071522508">Call us at: 09071522508</a>
			<a href="tel:08023479124">Call us at: 08023479124</a>
		</div>
	</div>
</body>
</html>