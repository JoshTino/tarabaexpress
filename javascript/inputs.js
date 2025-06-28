var lettercount = document.getElementById("letter-count");
var deleteDialog = document.getElementsByClassName("delete-dialog")[0];
var overlay = document.getElementsByClassName("overlay")[0];
var toggle1 = document.getElementById("toggle1");
var toggle2 = document.getElementById("toggle2");
var c2 = document.getElementsByClassName("child2")[0];

function countString() {
	var countResult;
	var textarea = document.getElementById("textarea");

	countResult = textarea.value.length;
	lettercount.innerHTML = countResult;
}


function showDelete() {
	deleteDialog.style.display = "block";
	overlay.style.display = "block";
}


function hideClick() {
	deleteDialog.style.display = "none";
	overlay.style.display = "none";
}

function showPlate() {
	c2.style.display = "block";
	toggle1.style.display = "none";
	toggle2.style.display = "block";
}

function hidePlate() {
	c2.style.display = "none";
	toggle1.style.display = "block";
	toggle2.style.display = "none";
}


