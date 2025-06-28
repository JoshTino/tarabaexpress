<div class="baby">
<?php

resultOf('setHeadlines', $limit, $offset);

while ($row = mysqli_fetch_assoc($result)) {
	$pdate = substr($row['Post_date'], 0,10);
	if ($pdate === date("Y-m-d")) {
		$date = substr(date('h:i a m/d/Y', strtotime($row['Post_date'])), 0, 9);
	} else {
		$date = "Recent";
	}

	if (strlen($row['Title']) <= 32) {
		$title = $row['Title']." ************";
	} else {
		$title = $row['Title'];
	}
?>
	<a href="<?php echo substr($row['Post_date'], 0,7);?><?php echo "/". $row['Url']?>"><div class="news-box">
		<div class="news-box-img">
			<img src="news img <?php echo substr($row['Post_date'], 0,7) ?>/<?php echo $row['Image']?>" style="border-radius: 8px;">
		</div>
			<div class="news-box-body">
				<h5><?php echo $title;?></h5>
				<!--<p><?php echo substr($row['Body'], 0, 146)?>...</p>-->
					<div class="bottom-info"><small><?php echo str_replace('news', '', $row['Category'])?></small><small style="display: flex; align-items: center;"><span class="material-icons" style="font-size: 14px; margin-right: 3px;">watch_later</span><?php echo $date;?></small> <small style="display: flex; align-items: center;"><span class="material-icons" style="font-size: 14px; margin-right: 3px;">visibility</span><?php echo sanNum($row['Views'])?></small></div>
			</div>
		</div></a>
<?php
}
?>
</div>