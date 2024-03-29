// JavaScript Document
var counter = 0;
$(document).ready(function() {
	
	selectPage();
	
});

function selectPage() {

	$('#home').show();
	$('#about').hide();
	$('#models').hide();
	$('#interaction').hide();
	$('#cokeDescription').hide();
	$('#spriteDescription').hide(); 
	$('#pepperDescription').hide(); 

	document.getElementById('navHome').className = "nav-link active"; 

	
	document.getElementById('bodyColor').style.backgroundColor = '#FFFFFF';	//set the colour to "reset" by default
	document.getElementById('headerColor').style.backgroundColor = 'rgba(175,0,0,1)';
	document.getElementById('footerColor').style.backgroundColor = 'rgba(175,0,0,1)';


	$('#navHome').click(function(){
		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 	
		document.getElementById('navHome').className = "nav-link active"; 
		document.getElementById('navAbout').className = "nav-link"; 
		document.getElementById('navModels').className = "nav-link"; 
		document.getElementById('navContact').className = "nav-link"; 
		document.getElementById('navSearch').className = "nav-link"; 
	});



	$('#navHomeLogo').click(function(){	//make the logo act like the home button too
		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 
		document.getElementById('navHome').className = "nav-link active"; 
		document.getElementById('navAbout').className = "nav-link"; 
		document.getElementById('navModels').className = "nav-link"; 
		document.getElementById('navContact').className = "nav-link"; 
		document.getElementById('navSearch').className = "nav-link"; 	  
	});



	$('#navAbout').click(function(){
		$('#home').hide();
		$('#about').show();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 
		document.getElementById('navHome').className = "nav-link"; 
		document.getElementById('navAbout').className = "nav-link active"; 
		document.getElementById('navModels').className = "nav-link"; 
		document.getElementById('navContact').className = "nav-link"; 
		document.getElementById('navSearch').className = "nav-link"; 
	});



	$('#navModels').click(function(){
		$('#home').hide();
		$('#about').hide();
		$('#models').show();
		$('#interaction').show(); 
		$('#cokeDescription').show();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide();
		$("#x3dModelTitle_coke").show();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").hide();
		$("#x3dCreationMethod_coke").show();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_pepper").hide(); 
		document.getElementById('navHome').className = "nav-link"; 
		document.getElementById('navAbout').className = "nav-link"; 
		document.getElementById('navModels').className = "nav-link active"; 
		document.getElementById('navContact').className = "nav-link"; 
		document.getElementById('navSearch').className = "nav-link"; 
	});



	$('#navContact').click(function(){
		document.getElementById('navHome').className = "nav-link"; 
		document.getElementById('navAbout').className = "nav-link"; 
		document.getElementById('navModels').className = "nav-link"; 
		document.getElementById('navContact').className = "nav-link active"; 
		document.getElementById('navSearch').className = "nav-link"; 
	});



	$('#navSearch').click(function(){		
		document.getElementById('navHome').className = "nav-link"; 
		document.getElementById('navAbout').className = "nav-link"; 
		document.getElementById('navModels').className = "nav-link"; 
		document.getElementById('navContact').className = "nav-link"; 
		document.getElementById('navSearch').className = "nav-link active"; 
	});
}




function cokeDescription() {
	$("button").click(function(){
		
		$("#cokeDescription").show();
        $("#spriteDescription").hide();
		$("#pepperDescription").hide();
		
		$("#x3dModelTitle_coke").show();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").hide();

		$("#x3dCreationMethod_coke").show();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_pepper").hide();

    }); 
}




function spriteDescription() {
    $("button").click(function(){

        $("#cokeDescription").hide();
        $("#spriteDescription").show();
		$("#pepperDescription").hide();
		
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_sprite").show();
		$("#x3dModelTitle_pepper").hide();

		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_sprite").show();
		$("#x3dCreationMethod_pepper").hide();
    }); 
}




function pepperDescription() {
    $("button").click(function(){

        $("#cokeDescription").hide();
        $("#spriteDescription").hide();
		$("#pepperDescription").show();
		
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").show();

		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_pepper").show();
    }); 
}




function changeLook() {
	counter += 1;
	switch (counter) {
		case 1:
			document.getElementById('bodyColor').style.backgroundColor = 'lightblue';
			document.getElementById('headerColor').style.backgroundColor = '#FF0000';
			document.getElementById('footerColor').style.backgroundColor = '#FF9900';
			break;
		case 2:
			document.getElementById('bodyColor').style.backgroundColor = '#FF6600';
			document.getElementById('headerColor').style.backgroundColor = '#FF9999';
			document.getElementById('footerColor').style.backgroundColor = '#996699';
			break;
		case 3:
			document.getElementById('bodyColor').style.backgroundColor = 'coral';
			document.getElementById('headerColor').style.backgroundColor = 'darkcyan';
			document.getElementById('footerColor').style.backgroundColor = 'darksalmom';
			break;
		case 4:
			counter = 0;
			document.getElementById('bodyColor').style.backgroundColor = 'lightgrey';
			document.getElementById('headerColor').style.backgroundColor = 'chocolate';
			document.getElementById('footerColor').style.backgroundColor = 'dimgrey';
			break;
	}
}




function changeBack() {
	document.getElementById('bodyColor').style.backgroundColor = '#FFFFFF';
	document.getElementById('headerColor').style.backgroundColor = 'rgba(175,0,0,1)';
	document.getElementById('footerColor').style.backgroundColor = 'rgba(175,0,0,1)';
}

