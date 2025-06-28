<?php
 require_once 'includes/autoloader.inc.php';
 require_once 'includes/adminlogin.inc.php';
 require_once 'includes/edit.inc.php';
 require_once 'includes/delete.inc.php';
 @$id = $_SESSION['id'];
 if (isset($_GET['logout'])) {
 session_destroy();
 header('Location: ./control.php');
 }
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
	<div class="overlay">
			
	</div>
	<div class="overlay2" style="display: <?php echo @$_SESSION['display']?>;">
		<div class="login-form">
			<h4>Admin Login</h4>
			<form method="POST">
				<input type="text" value="<?php echo $username;?>" placeholder="Username" name="username">
				<input type="password" value="<?php echo $password;?>" placeholder="Password" name="password">
				<button name="login">Login</button>
			</form>
		</div>
	</div>
	<div class="mother">
		<div class="delete-dialog">
			<div class="inner">
				<div><h4>Continue and delete?</h4></div>
				<div><a href="?delete"><button class="delete-true material-icons">check</button></a><button class="delete-false material-icons" onclick="hideClick()">close</button></div>
			</div>
		</div>
		<div class="child1">
			<div class="list-box">
				<?php
				resultOf('setOwnerNews', 0, 0);
				while ($row = mysqli_fetch_assoc($result)) {
					?>
					<div class="list-div">
						<div class="title"><h5><?php echo $row['Title'];?></h5></div>
						<div class="controls"><a href="?edit=<?php echo $row['NewsID']?>&changepage=<?php echo substr($row['Post_date'], 0,7);?><?php echo "/". $row['Url']?>&idtt=<?php echo $row['Idtt']?>"><button class="edit-btn">Edit</button></a><button class="delete-btn <?php echo $row['NewsID']?>" placeholder='<?php echo "newspic/". $row["Image"]?>' value="<?php echo substr($row['Post_date'], 0,4);?><?php echo "/". $row['Url']?>" id="delete-btn" onclick="showDelete(document.cookie = 'todelete='+getAttribute('class').substring(10), document.cookie = 'tounlink='+getAttribute('value'), document.cookie = 'unlinkimg='+ getAttribute('placeholder'))">Delete</button></div>
					</div>
					<?php
				}
				?>
			


			<?php
			if (!isset($_SESSION['cati'])) {
				$cati = 'Politics';
				$getNews = new View();
				$getNews->setOwnerNews($cati, $id);
			} else {
				$cati = $_SESSION['cati'];
				$getNews = new View();
				$getNews->setOwnerNews($cati, $id);
			}
			?>
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
	<?php L(0,0); include 'components/footer.com.php'?>
	<script src="javascript/inputs.js"></script>
</body>
</html>