function getXMLHttp() {
	var xmlHttp
	try {
		xmlHttp = new XMLHttpRequest ();
	} catch (e) {
		try {
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				return false;
			}
		}
	}
	return xmlHttp;
}




//AJAX request, store new code and server response
var xmlHttp = getXMLHttp();
var htmlCode = "";
var response;



$(document).ready(function() {
	var send = "../application/view/hook.php";
	console.log(send);

	// Open the connection to the web server
	xmlHttp.open("GET", send, true);
	// Tell the server theres no outgoing message
	xmlHttp.send(null);


	// Check to see if there was a valid response from the server
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4) {		
			response = xmlHttp.responseText.split("~");
			// Loop round the response array
			for (var i=0;i<response.length;i++) {
				htmlCode += '<a href="'+ response[i] + ' " data-fancybox data-caption="My X3D model image" > ';
				htmlCode += '<img class="card-img-top img-thumbnail" src="' + response[i] + '"/>';
				htmlCode += '</a>';	
				console.log(response[i]);		
			}			
			// Return the HTML string to each of the 4 3D App pages...
			document.getElementById('gallery').innerHTML = htmlCode;
		}
	}
});

