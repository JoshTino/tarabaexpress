<?php

class Model extends Database {

	public function con() {
		return $this->conn();
	}

	protected function getAdminDetail($id) {
		$sql = "SELECT * FROM admin WHERE ID='$id'";
		$result = $this->conn()->query($sql);

		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	protected function setLogin(string $username, string $password) {
		$check_admin = "SELECT * FROM admin WHERE Username='$username' AND Password='$password'";
		$result = $this->conn()->query($check_admin);

		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
			$_SESSION['id'] = $row['ID'];
			$_SESSION['firstName'] = $row['Firstname'];
			$_SESSION['username'] = $row['Username'];
			$_SESSION['display'] = "none";
			header("Location: ./control.php");
		}
	}


	protected function getOwnerNews() {
		$id = $_SESSION['id'];

		if (!isset($_SESSION['cati'])) {
			$sql = "SELECT * FROM news_table WHERE PosterID='$id' AND Category='Politics' ORDER BY Post_date DESC";
		} else {
			$category = $_SESSION['cati'];
			$sql = "SELECT * FROM news_table WHERE PosterID='$id' AND Category='$category' ORDER BY Post_date DESC";
		}

		return $sql;
	}


	protected function getNews($editId) {
		$sql = "SELECT * FROM news_table WHERE NewsID='$editId'";
		$result = $this->conn()->query($sql);

		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	protected function getSocials($editId) {
		$sql = "SELECT Url, Post_date FROM news_table WHERE NewsID='$editId'";
		$result = $this->conn()->query($sql);

		$row = mysqli_fetch_assoc($result);
		echo substr($row['Post_date'], 0,4);?><?php echo "/". $row['Url'];
	}

	protected function getImage($idtt) {
		$sql = "SELECT Image FROM news_table WHERE Idtt='$idtt'";
		$result = $this->conn()->query($sql);

		$row = mysqli_fetch_assoc($result);
		echo $row['Image'];
	}

	protected function setPost(string $title, $idtt, string $category, string $body, $file, string $url, $id) {

		// $imageName = strtolower(trim($title));
		// $imageName = preg_replace('/\s+/', '-', str_replace('-', ' ', $imageName));

		$imageName = strtolower(trim($title));
		$imageName = preg_replace('/[^A-Za-z0-9]/', '', $imageName);
		$imageName = preg_replace('/\s+/', '-', $imageName);

		$image = $this->reSizer($file, $imageName);

		$conn = $this->conn();
		$sql = "INSERT INTO news_table (Title, Idtt, Category, Body, Image, Url, PosterID) VALUES(?, ?, ?, ?, ?, ?, ?)";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("sissssi", $title, $idtt, $category, $body, $image, $url, $id);
		if ($stmt->execute()) {
			header("Location: ./control.php");
		}
	}

	protected function setDelete($deleteId) {
		$sql = "DELETE FROM news_table WHERE NewsID='$deleteId'";
		$this->conn()->query($sql);
	} 

	protected function setPage(string $title, string $category, string $body, $file, $id) {

		$image = $this->reSizer($file);
		$sql = "INSERT INTO news_table (Title, Category, Body, Image, PosterID) VALUES('$title', '$category', '$body', '$image', '$id')";
		if ($this->conn()->query($sql) === TRUE) {
			header("Location: ./control.php");
		}
	}

	protected function setUpdate(string $title, string $category, string $body, $file, $editId) {
		$conn = $this->conn();
		if (empty($file)) {
			$sql = "UPDATE news_table SET Title=?, Category=?, Body=? WHERE NewsID=?";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("sssi", $title, $category, $body, $editId);
			$stmt->execute();
		} else {

			$imageName = strtolower(trim($title));
			$imageName = preg_replace('/\s+/', '-', str_replace('-', ' ', $imageName));

			$image = $this->reSizer($file, $imageName);

			$sql = "UPDATE news_table SET Title=?, Category=?, Body=?, Image=? WHERE NewsID=?";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("ssssi", $title, $category, $body, $image, $editId);
			$stmt->execute();
		}
		
	}

	protected function setChanges(string $username, string $verifyold, string $newpass, $id) {
		$check = "SELECT * FROM admin WHERE Password='$verifyold' AND ID='$id'";
		$result = $this->conn()->query($check);

		if (mysqli_num_rows($result) == 1) {
			$sql = "UPDATE admin SET Username='$username', Password='$newpass' WHERE ID='$id'";
			$this->conn()->query($sql);
		}
	}

	protected function sanNum($count) {
		$numLength = strlen($count);

 	switch($numLength) {
 		case 4:
  			$newCount = substr_replace($count, 'K', 1,6);
 		break;
		case 5:
 			$newCount = substr_replace($count, 'K', 2,6);
 		break;
		case 6:
        	$newCount = substr_replace($count, 'K', 3,6);
		break;
		case 7:
        	$newCount = substr_replace($count, 'M', 1,6);
 		break;
 		case 8:
    		$newCount = substr_replace($count, 'M', 2,6);
 		break;
 		case 9:
    		$newCount = substr_replace($count, 'M', 3,6);
 		break;
 		default:
 			$newCount = $count;
 		break;
		}
		return $newCount;
	}

	protected function getSlider() {
		$today = date("Y-m");
		//$today = date("Y");
		return $sql = "SELECT * FROM news_table WHERE Post_date LIKE '$today%' ORDER BY Views DESC LIMIT 1";
	}

	protected function getHeadlines($limit, $offset) {
		$category = $_SESSION['news_category'];
		if ($category == "Home") {
			$today = date("Y-m");
			//$sql = "SELECT * FROM news_table WHERE Post_date LIKE '$today%' ORDER BY Post_date DESC LIMIT 2";
			$sql = "SELECT * FROM news_table ORDER BY Post_date DESC LIMIT $limit OFFSET $offset";
		} else {
			$sql = "SELECT * FROM news_table WHERE Category='$category' ORDER BY Post_date DESC LIMIT $limit OFFSET $offset";
		}

		return $sql;

	}



	protected function getHorizontalNews(int $limit, int $offset) {
		$category = $_SESSION['news_category'];
		//return $sql = "SELECT * FROM news_table WHERE Category='$category' ORDER BY rand() LIMIT 4";
		if ($category == "Home") {
			return $sql = "SELECT * FROM news_table ORDER BY Post_date DESC LIMIT $limit OFFSET $offset";
		} else {
			return $sql = "SELECT * FROM news_table WHERE Category='$category' ORDER BY Post_date DESC LIMIT $limit OFFSET $offset";
		}
	}


	protected function getHyperlink(int $limit, int $offset) {
		$category = $_SESSION['news_category'];

		if ($category == "Home") {
			$sql = "SELECT * FROM news_table ORDER BY Post_date DESC LIMIT $limit OFFSET $offset";
		} else {
			$sql = "SELECT * FROM news_table WHERE Category='$category' ORDER BY Post_date DESC LIMIT $limit OFFSET $offset";
		}

		return $sql;
	}


	protected function detailDate($idtt) {
		$sql = "SELECT Post_date FROM news_table WHERE Idtt='$idtt'";
		$result = $this->conn()->query($sql);

		$row = mysqli_fetch_assoc($result);
  		$date = substr($row['Post_date'], 0,10);
  		$time = substr(date('h:i a m/d/Y', strtotime($row['Post_date'])), 0,8);

  		if ($date == date("Y-m-d")) {
  			$day = $time." Today";
  		} else {
  			$day = $date;
  		}
  		return $day;
	}

	protected function imageDate($idtt) {
		$sql = "SELECT Post_date FROM news_table WHERE Idtt='$idtt'";
		$result = $this->conn()->query($sql);

		$row = mysqli_fetch_assoc($result);
		echo substr($row['Post_date'], 0,7);
	}

	protected function setViews($newsID) {
		$select = "SELECT Views FROM news_table WHERE NewsID='$newsID'";
		$result = $this->conn()->query($select);

		$row = mysqli_fetch_assoc($result);
		$newCount = ++$row['Views'];
		$update = "UPDATE news_table SET Views='$newCount' WHERE NewsID='$newsID'";
		$this->conn()->query($update);
	}

	protected function setDirectViews($idtt) {
		$select = "SELECT Views FROM news_table WHERE Idtt='$idtt'";
		$result = $this->conn()->query($select);

		$row = mysqli_fetch_assoc($result);
		$newCount = ++$row['Views'];
		$update = "UPDATE news_table SET Views='$newCount' WHERE Idtt='$idtt'";
		$this->conn()->query($update);
	}


	protected function getSideNews(int $limit, $offset) {
		return $sql = "SELECT * FROM news_table ORDER BY rand() LIMIT $limit";
	}


	protected function getLinkNews(int $limit, $offset) {
		$date = date("Y-m");
		return $sql = "SELECT * FROM news_table WHERE Post_date LIKE '$date%' ORDER BY Views DESC LIMIT $limit";
	}

	protected function getMarquee(int $limit, int $offset) {
		return $sql = "SELECT Title, Url, NewsID, Post_date FROM news_table ORDER BY Post_date DESC LIMIT $limit";
	}

	protected function getMetaContent($column, $idtt) {
		$sql = "SELECT $column FROM news_table WHERE Idtt='$idtt'";
		$result = $this->conn()->query($sql);

		$row = mysqli_fetch_assoc($result);
		echo $row[$column];
	}

	protected function reSizer($file, $imageName) {
		//$directory = "newspic/";
		$rand1 = rand(9, 99);
		$rand2 = rand(9, 99);

		list($width, $height) = getimagesize($file);
		$check = getimagesize($file);
		$type = $check['mime'];

		$thumbNail = 900;
		if ($width <= $thumbNail) {
			$percent = 1;
		} else {
			$percent = $thumbNail / $width;
		}

		$new_width = $width * $percent;
		$new_height = $height * $percent;

		
		$dir = "news img ".date("Y-m");
		if (!is_dir($dir)) {
			mkdir($dir);
			$directory = $dir."/";
		} else {
			$directory = $dir."/";
		}


		switch($type) {
			case "image/jpeg":
			$src = imagecreatefromjpeg($file);
			$tmp = imagecreatetruecolor($new_width, $new_height);
			imagecopyresampled($tmp, $src, 0,0,0,0, $new_width, $new_height, $width, $height);
			$dbResult = $imageName."."."jpeg";
			$upload = $directory.$imageName."."."jpeg";
			imagejpeg($tmp, $upload, 95);
			break;
			case "image/jpg":
			$src = imagecreatefromjpeg($file);
			$tmp = imagecreatetruecolor($new_width, $new_height);
			imagecopyresampled($tmp, $src, 0,0,0,0, $new_width, $new_height, $width, $height);
			$dbResult = $rand1.$rand2."."."jpg";
			$upload = $directory.$rand1.$rand2."."."jpg";
			imagejpeg($tmp, $upload, 95);
			break;
			case "image/png":
			$src = imagecreatefrompng($file);
			$tmp = imagecreatetruecolor($new_width, $new_height);
			imagecopyresampled($tmp, $src, 0,0,0,0, $new_width, $new_height, $width, $height);
			$dbResult = $rand1.$rand2."."."jpg";
			$upload = $directory.$rand1.$rand2."."."jpg";
			imagejpeg($tmp, $upload, 95);
			break;
		}
		return $dbResult;
	}

	protected function getAdminCount() {
		$sql = "SELECT * FROM admin";
		$result = $this->conn()->query($sql);
		$count = mysqli_num_rows($result);
		echo $count;
	}

	protected function getTotalPost($id) {
		$sql = "SELECT * FROM news_table WHERE PosterID='$id'";
		$result = $this->conn()->query($sql);
		$count = mysqli_num_rows($result);
		echo $count;
	}

	protected function getAdminTrending() {
		$sql = "SELECT * FROM news_table ORDER BY Views DESC LIMIT 3";
		$result = $this->conn()->query($sql);

		while($row = mysqli_fetch_assoc($result)) {
			?>
			<small><a style="text-decoration: none; color: #737373; font-size: 10px; text-align: center;" href="<?php echo $row['Url']?>"><?php echo substr($row['Title'], 0, 33)?></a></small>
			<?php
		}
	}

	protected function getDailyVisitors() {
		$today = date("Y-m-d");
		$sql = "SELECT Viewamount FROM daily_views WHERE Viewdate='$today'";
		$result = $this->conn()->query($sql);
		$row = mysqli_fetch_assoc($result);
		echo number_format($row['Viewamount']);
	}

	protected function getMonthlyVisitors() {
		$today = date("Y-m");
		$sql = "SELECT Viewamount FROM monthly_views WHERE Viewdate='$today'";
		$result = $this->conn()->query($sql);
		$row = mysqli_fetch_assoc($result);
		echo number_format($row['Viewamount']);
	}

	protected function setDailyVisit() {
		$today = date("Y-m-d");
		$check_date = "SELECT Viewamount FROM daily_views WHERE Viewdate='$today'";
		$result = $this->conn()->query($check_date);

		if (mysqli_num_rows($result) == 1) {
				$row = mysqli_fetch_assoc($result);
				$new_count = ++$row['Viewamount'];
				$set_view = "UPDATE daily_views SET Viewamount='$new_count' WHERE Viewdate='$today'";
				$this->conn()->query($set_view);
		} else {
				$set_new_view = "INSERT INTO daily_views (Viewamount, Viewdate) VALUES('1', '$today')";
				$this->conn()->query($set_new_view);
			}
	}

	protected function setMonthlyVisit() {
		$thisMonth = date("Y-m");
		$check_date = "SELECT Viewamount FROM monthly_views WHERE Viewdate='$thisMonth'";
		$result = $this->conn()->query($check_date);

		if (mysqli_num_rows($result) == 1) {
				$row = mysqli_fetch_assoc($result);
				$new_count = ++$row['Viewamount'];
				$set_view = "UPDATE monthly_views SET Viewamount='$new_count' WHERE Viewdate='$thisMonth'";
				$this->conn()->query($set_view);
		} else {
				$set_new_view = "INSERT INTO monthly_views (Viewamount, Viewdate) VALUES('1', '$thisMonth')";
				$this->conn()->query($set_new_view);
			}
	}

	protected function setAdmin(string $firstname, string $lastname, string $username, string $password) {
		$sql = "INSERT INTO admin (Firstname, Lastname, Username, Password) VALUES('$firstname', '$lastname', '$username', '$password')";
		$this->conn()->query($sql);
	}
}