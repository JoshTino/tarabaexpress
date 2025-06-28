<div class="horizontal-news">
<?php
	resultOf('setHorizontalNews', $limit, $offset);
	while($row = mysqli_fetch_assoc($result)) {
		?>
			<a href="<?php echo substr($row['Post_date'], 0,7);?><?php echo "/". $row['Url']?>">
				<div class="horizontal-news-box">
					<div class="horizontal-news-box-img">
						<img src="news img <?php echo substr($row['Post_date'], 0,7) ?>/<?php echo $row['Image']?>?> ">
					</div>
					<h3><?php echo $row['Title'] ?></h3>
				</div>
			</a>
		<?php
	}
	?>
</div>