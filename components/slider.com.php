<div class="news-slider">
	<?php
		resultOf('setSlider', $limit, $offset);
		while ($row = mysqli_fetch_assoc($result)) {
	?>
	<a href="<?php echo substr($row['Post_date'], 0,7);?><?php echo "/". $row['Url']?>">
		<img style="object-fit: cover;" src="news img <?php echo substr($row['Post_date'], 0,7) ?>/<?php echo $row['Image']?>">
		<h3 class="slider-title"><mark><?php echo $row['Title']?></mark></h3>
	</a>
	<?php
		}
		?>
</div>