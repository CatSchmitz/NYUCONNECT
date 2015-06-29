// JavaScript Document
var HTML;
var day_two = "<!DOCTYPE html> \n<html> \n<head>\n<title> \nTitle of the document \n</title> \n</head> \n<body>\nThe content of the document......\n</body> \n</html> ";
var day = location.search;



function testCode() {
	HTML = document.getElementById("input").value;
	document.getElementById("output").innerHTML = HTML;
	document.getElementById("test").style.background = "#eee9f2";
	document.getElementById("test").disabled = true;

}

function resetCode() {
	switch(day) {
    	case "?two":
        	document.getElementById("input").innerHTML = day_two;
			document.getElementById("output").innerHTML = day_two;
			console.log(day_two);
        	break;
	}

}


function testScreenSize() {
	if (window.innerWidth <= 638) {
		document.getElementById("output").style.float = "left";
		document.getElementById("editor").style.height = "1300px";
		document.getElementById("backButton").align = "left";
	}
	else {
		document.getElementById("output").style.float = "right";
		document.getElementById("editor").style.height = "650px";
		document.getElementById("backButton").align = "center";

	}
	
}

function enableButton() {
	document.getElementById("test").style.background = "#572B85";
	document.getElementById("test").disabled = false;
}

function goBack() {
	window.history.back();
}