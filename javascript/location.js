var locVal, xhttp;
var locOverlay = document.getElementById('locOverlay');

function locSubmit() {
	locVal = document.getElementById("locOption").value;

if (locVal != "--Select State--") {
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = requestResponse;
	xhttp.open("GET","includes/loccookie.inc.php?loc="+ locVal, true);
	xhttp.send();
	}

	function requestResponse() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			locOverlay.style.display = 'none';
		}
	}
}