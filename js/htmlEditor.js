// JavaScript Document
var HTML;
var day_two = "<!-- This is my comment. I can write whatever I want here. -->\n<!-- This is a doctype, it tells the browser what language the page is written in. HTML documents are made up of HTML elements. Elements are written with an opening <tag> and a closing </tag>.--><!doctype html>\n<!-- The <html> tag begins our code -->\n<html>\n<!-- The <head> section gives the web browser instructions for reading the page -->\n<head>\n<!-- The <meta> tag provides information about the document. charset is a <tag> attribute. Attributes give details about tags. \"UTF-8\" is the character set, or alphabet, that the page is written in. It stands for Unicode Transformation Format. -->\n<meta charset=\"UTF-8\">\n<!-- The <title> tag is for the webpage title. It appears in the tab at the top of your web browser -->\n<title> My Page Title </title>\n</head>\n<!-- The <body> section tells the web browser what content to display. -->\n<body>\n<header>This is a Page Header. Think of it like a title section.</header>\n<!-- The <hr> horizontal rule tag draws a horizontal line -->\n<hr>\n<!-- This is a navigation section -->\n<nav>\n<!-- This <ul> tag begins an unordered list (with bullet points) -->\n<ul>\n<!-- These are list items <li> used for each bullet point </li> -->\n<li><a href=\"http://www.nyu.edu\">Link to NYU Homepage</a></li>\n<li><a href=\"basic.txt\">Link to Source Code saved as .txt</a></li>\n<li>Link 3</li>\n<li>Link 4</li>\n</ul>\n</nav>\n<!-- The <section> tag can be used to group related content. -->\n<section>\n<!-- The <img> tag is used to display photos. It also has alt (short for Alternate Text if the picture cannot be displayed), height, and width attributes -->\n<img src=\"http://www.kentonlibrary.org/wp-content/uploads/2015/05/photography2.jpg\" alt=\"Hands holding cameras up in the air.\" height=\"340\" width=\"960\">\n<!-- Headings are used as titles for headers, paragraphs or content sections. There are six default heading styles -->\n<h1>This is an h1 heading.</h1>\n<h2>This is an h2 heading.</h2>\n<h3>This is an h3 heading.</h3>\n<h4>This is an h4 heading.</h4>\n<h5>This is an h5 heading.</h5>\n<h6>This is an h6 heading.</h6>\n<hr>\n<!-- Article content should be able to stand alone, like an article or blog post -->\n<article>\n<!-- The <p> paragraph tag should be used for all text. -->\n<!-- <p> This is another paragraph. </p> --> \n <p>This is a paragraph with <br /> \n a line break.</p>\n<!-- The <aside> is content aside from the content it is placed in -->\n<aside>\n<p>This is <strong>important</strong> text.</p>\n<p>This is <em>emphasized</em> text.</p>\n</aside>\n</article>\n</section>\n<!-- This is a page footer, like the part of a document that has a page number, or the part of a website where it says Copyright 2015. -->\n<footer>This is a Page Footer</footer> \n </body> \n </html>";
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