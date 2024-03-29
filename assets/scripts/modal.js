// JavaScript Document

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
function openmodal(content) {
    document.getElementById('myModal').style.display = "block";
	document.getElementById(content).style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function closemodal() {
    document.getElementById('myModal').style.display = "none";
	document.getElementById('login').style.display = "none";
	document.getElementById('register').style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
		document.getElementById('login').style.display = "none";
		document.getElementById('register').style.display = "none";
    }
}