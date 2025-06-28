<?php
require_once 'includes/autoloader.inc.php';
require_once 'includes/changes.inc.php';
require_once 'includes/newadmin.inc.php';
$id = $_SESSION['id'];
require_once 'includes/logout.inc.php';
require 'includes/viewhelper.inc.php';

$Username = new View();

$visibility = ($id != 1) ? "hidden" : "visible";
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
	<link rel="stylesheet" href="styles/misc.css">
	<meta name="theme-color" content="#2f4959">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,300;1,6..72,300&display=swap" rel="stylesheet">
</head>
<body>
	<div class="nav">
		<div class="nav1"><span class="logo">T<\>E</span></div>
		<div class="nav2"><a href="add.php"><span class="material-icons">add</span></a><a href="control.php"><span class="material-icons">edit</span></a><a href="dashboard.php"><span class="material-icons">dashboard</span></a></div>
	</div>
	<div class="mother">
		<div class="child1">
			<div class="setting-div">
				<div>
					<h5>Change username & password</h5>
					<form method="POST">
						<input type="text" required placeholder="New username" value="<?php echo $Username->setAdminDetail($id, 'Username');?>" name="username">
						<input type="text" required placeholder="New password" name="newpassword">
						<input type="text" required placeholder="Confirm new password" name="confirmnew">
						<input type="text" required placeholder="Old password" name="verifyold">
						<button name="changedetail">Save changes</button>
					</form>
				</div>
				<div style="visibility: <?php echo $visibility;?>">
					<h5>Add new admin</h5>
					<form method="POST">
						<input type="text" required placeholder="Firstname" name="firstname">
						<input type="text" required placeholder="Lastname" name="lastname">
						<input type="username" required placeholder="Username" name="username">
						<input type="password" required placeholder="Password" name="password">
						<button name="addadmin">Add admin</button>
					</form>
				</div>
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