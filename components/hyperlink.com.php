<div class="news-link">
	<?php
	resultOf('setHyperlink', $limit, $offset);
	while($row = mysqli_fetch_assoc($result)) {
	?>
	<a href="<?php echo substr($row['Post_date'], 0,7);?><?php echo "/". $row['Url']?>"><?php echo $row['Title']?></a>
	<?php
	}
	?>
</div>		