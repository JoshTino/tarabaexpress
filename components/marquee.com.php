<marquee scrollamount="4">
	<?php
	resultOf('setMarquee', $limit, $offset);
	while ($row = mysqli_fetch_assoc($result)) {
			if (strpos($_SERVER['PHP_SELF'], 'index.php') == true || strpos($_SERVER['PHP_SELF'], 'sport.php') == true || strpos($_SERVER['PHP_SELF'], 'lifestyle.php') == true || strpos($_SERVER['PHP_SELF'], 'politics.php') == true || strpos($_SERVER['PHP_SELF'], 'education.php') == true || strpos($_SERVER['PHP_SELF'], 'technology.php') == true || strpos($_SERVER['PHP_SELF'], 'world.php') == true || strpos($_SERVER['PHP_SELF'], 'development.php') == true || strpos($_SERVER['PHP_SELF'], 'article.php') == true) {
				?>
				<a style="color: yellow;" href="<?php echo substr($row['Post_date'], 0,7);?><?php echo "/". $row['Url']?>">-- -- <?php echo $row['Title']?> -- --</a>
				<?php
			} else {
				?>
				<a style="color: yellow;" href="../<?php echo substr($row['Post_date'], 0,7);?><?php echo "/". $row['Url']?>">-- -- <?php echo $row['Title']?> -- --</a>
				<?php
			}
		}
		?>
</marquee>