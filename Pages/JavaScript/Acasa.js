var imageCount = 1;
var total = 9;

// Aceasta functie este apelata atunci cand uunul dintre slidere este apasat
// Ea schimba din imaginea actuala in imaginea urmatoare sau in imaginea anterioara.
function photo(x) {
	// Variabila care inregistreaza proprietatile imagini. Vom folosi aceasta variabila pentru a schimba imaginea afisata
	var image = document.getElementById('image');
	imageCount = imageCount + x;
	// Daca imaginea urmatoare/anterioara este ultima/prima imagine atunci o seteaza ca si prima/ultima imagine pentru a mentine loop-ul
	if(imageCount > total){imageCount = 1;}
	if(imageCount < 1){imageCount = total;}	
	
	// Face rost de imaginea cu care sa fie schimbata cea actuala
	image.src = "pics/acasa/img"+ imageCount +".jpg";
	clearInterval(time);
	time =  window.setInterval(function photoA() {
		var image = document.getElementById('image');
		imageCount = imageCount + 1;
		if(imageCount > total){imageCount = 1;}
		if(imageCount < 1){imageCount = total;}	
		image.src = "pics/acasa/img"+ imageCount +".jpg";
	},10000);
}


var time = window.setInterval(function photoA() {
	var image = document.getElementById('image');
	imageCount = imageCount + 1;
	if(imageCount > total){imageCount = 1;}
	if(imageCount < 1){imageCount = total;}	
	image.src = "pics/acasa/img"+ imageCount +".jpg";
},2000);