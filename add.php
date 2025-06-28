<?php
require_once 'includes/autoloader.inc.php';
require_once 'includes/add.inc.php';
$id = $_SESSION['id'];
require_once 'includes/logout.inc.php';
require 'includes/viewhelper.inc.php';
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
	<link rel="stylesheet" type="text/css" href="styles/misc.css">
	<meta name="theme-color" content="#2f4959">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,300;1,6..72,300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="nav">
		<div class="nav1"><span class="logo">T<\>E</span></div>
		<div class="nav2"><a href="add.php"><span class="material-icons">add</span></a><a href="control.php"><span class="material-icons">edit</span></a><a href="dashboard.php"><span class="material-icons">dashboard</span></a></div>
	</div>
	<div class="mother">
		<div class="child1">
			<div class="add-div">
				<form method="POST" enctype="multipart/form-data">
					<input type="text" placeholder="Title" name="title">
					<select name="category">
						<option disabled selected>--Category--</option>
						<option>News</option>
						<option>Politics</option>
						<option>Sport</option>
						<option>Crime</option>
						<option>Education</option>
						<option>Tech</option>
						<option>World</option>
						<option>Lifestyle</option>
						<option>Article</option>
					</select>
					<div class="type-info"><small>Word count: 1,500</small> <small>Character count: <span id="letter-count"></span></small></div>
					<textarea onkeyup="countString()" id="textarea" name="body"></textarea>
					<input type="file" name="pic">
					<button name="post">Post</button>
				</form>
			</div>
		</div>
		<div class="child2">
			<div class="stable" style="padding-left: 5px;">
				<a class="a" href="?pol=Politics">Politics</a>
				<a class="a" href="?dev=News">News</a>
				<a class="a" href="?spo=Sport">Sport</a>
				<a class="a" href="?cri=Crime">Crime</a>
				<a class="a" href="?wor=World">World</a>
				<a class="a" href="?tec=Tech">Tech</a>
				<a class="a" href="?edu=Education">Education</a>
				<a class="a" href="?art=Article">Article</a>
				<a class="a" href="?lif=Lifestyle">Lifestyle</a>
				<a class="material-icons" id="logout-but" href="?logout">logout</a>
			</div>
		</div>
	</div>
			<button class="bottom-but" onclick="showPlate()" id="toggle1">&#9871;</button>
			<button class="bottom-but" style="display: none;" onclick="hidePlate()" id="toggle2">&#9871;</button>
	<?php L(0, 0); include 'components/footer.com.php'?>
	<script src="javascript/inputs.js"></script>
</body>
</html>