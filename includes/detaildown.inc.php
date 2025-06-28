	</div>
</div>
		<div class="child2">
				<?php L(10, 0); include '../components/sidenews.com.php'?>
		</div>
	</div>
		<div class="marquee">
			<div id="footer-ads"><div><span>&times;</span><a href=""><img src="../adsbanner/unnamed.png"></a></div></div>
		<?php L(13, 0); include '../components/marquee.com.php'?>
	</div>
	<?php L(5, 0); include '../components/footer.com.php'?>
	<script>
var locVal, xhttp;
var locOverlay = document.getElementById('locOverlay');

function locSubmit() {
	locVal = document.getElementById("locOption").value;

if (locVal != "--Select State--") {
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = requestResponse;
	xhttp.open("GET","../includes/loccookie.inc.php?loc="+ locVal, true);
	xhttp.send();
	}

	function requestResponse() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			locOverlay.style.display = 'none';
		}
	}
}
	</script>
</body>
</html>