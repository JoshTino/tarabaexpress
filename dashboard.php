<?php
require_once 'includes/autoloader.inc.php';
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
      <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
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
			<div class="dashboard">
				<div>
					<h4>Daily Visit</h4>
					<h3>
						<?php
						$dailyVisitors = new View();
						$dailyVisitors->dailyVisitors();
						?>
					</h3>
				</div>
				<div>
					<h4>Monthly Visit</h4>
					<h3>
						<?php
						$monthlyVisitors = new View();
						$monthlyVisitors->monthlyVisitors();
						?>
					</h3>
				</div>
				<div>
					<h4>Total Post</h4>
					<h3>
						<?php
						$totalPost = new View();
						$totalPost->totalPost($id);
						?>
					</h3>
				</div>
				<div>
					<h4>Email Subscribers</h4>
					<h3>243</h3>
				</div>
				<div>
					<h4>Admin(s)</h4>
					<h3>
						<?php
						$adminCount = new View();
						$adminCount->adminCount();
						?>
					</h3>
				</div>
				<div>
					<h4>Most Read</h4>
					<?php
					$adminTrending = new View();
					$adminTrending->adminTrending(); 
					?>
				</div>
			</div>
			<div class="dashboard2">
				<a href="setting.php"><button class="set-btn material-icons">handyman</button></a>
			</div>
		</div>
		<div class="child2">
			<div class="stable">
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