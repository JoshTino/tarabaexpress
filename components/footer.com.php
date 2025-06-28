
<div class="footer">
		<div class="top-news">
			<h4>Top 5 news</h4>
			<?php
			resultOf('setLinkNews', $limit, $offset);
			while ($row = mysqli_fetch_assoc($result)) {
					if (strpos($_SERVER['PHP_SELF'], 'index.php') == true || strpos($_SERVER['PHP_SELF'], 'sport.php') == true || strpos($_SERVER['PHP_SELF'], 'lifestyle.php') == true || strpos($_SERVER['PHP_SELF'], 'politics.php') == true || strpos($_SERVER['PHP_SELF'], 'education.php') == true || strpos($_SERVER['PHP_SELF'], 'technology.php') == true || strpos($_SERVER['PHP_SELF'], 'world.php') == true || strpos($_SERVER['PHP_SELF'], 'development.php') == true || strpos($_SERVER['PHP_SELF'], 'article.php') == true) {
						?>
						<a href="<?php echo substr($row['Post_date'], 0,7);?><?php echo "/". $row['Url']?>"><?php echo $row['Title']?></a>
						<?php
					} else {
						?>
						<a href="../<?php echo substr($row['Post_date'], 0,7);?><?php echo "/". $row['Url']?>"><?php echo $row['Title']?></a>
						<?php
					}
				}
				?>
		</div>
		<div class="about-us">
			<h4>About Us</h4>
			<p>We bring to you latest breaking news at your fingertip, happenings around the state and the nation, come back to TarabaExpress for more</p>
		</div>
		<div class="contact-us">
			<h4>Contact Us</h4>
			<a href="mailto:tarabaexpress@gmail.com">e-mail: tarabaexpress@gmail.com</a>
			<a href="mailto:tarabaexpress@yahoo.com">e-mail: tarabaexpress@yahoo.com</a><br>
			<!-- <a href="tel:09122496966">phone: 09122496966</a>
			<a href="tel:09045593809">phone: 09045593809</a> -->
		</div>
	</div>