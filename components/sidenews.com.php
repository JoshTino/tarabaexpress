<div class="stable" style="background: #ffffff;">
<?php
				resultOf('setSideNews', $limit, $offset);
				while ($row = mysqli_fetch_assoc($result)) {
					if (strpos($_SERVER['PHP_SELF'], 'index.php') == true || strpos($_SERVER['PHP_SELF'], 'sport.php') == true || strpos($_SERVER['PHP_SELF'], 'lifestyle.php') == true || strpos($_SERVER['PHP_SELF'], 'politics.php') == true || strpos($_SERVER['PHP_SELF'], 'education.php') == true || strpos($_SERVER['PHP_SELF'], 'technology.php') == true || strpos($_SERVER['PHP_SELF'], 'world.php') == true || strpos($_SERVER['PHP_SELF'], 'development.php') == true || strpos($_SERVER['PHP_SELF'], 'article.php') == true) {
				?>
					<a href="<?php echo substr($row['Post_date'], 0,7);?><?php echo "/". $row['Url']?>">
					<div>
					<h5><strong style="font-size: 15px;">>></strong> <?php echo ucwords($row['Title'])?></h5>
					<!--<p><?php echo substr($row['Body'], 0,100)?></p>-->
					</div>
					</a>
				<?php
				} else {
				?>
				<a href="../<?php echo substr($row['Post_date'], 0,7);?><?php echo "/". $row['Url']?>">
				<div>
				<h5><?php echo $row['Title']?></h5>
				<!--<p><?php echo substr($row['Body'], 0,100)?></p>-->
				</div>
				</a>
				<?php
				}
			}
			?>
</div>