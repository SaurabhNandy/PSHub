

window.onclick = function(event) {
	if (event.target == modal1) {
		modal1.style.display = "none";
	}
	else if (event.target == modal2) {
		modal2.style.display = "none";        
	}
	else if (event.target == modal3) {
		modal3.style.display = "none";
	}
	else if (event.target == modal4) {
		modal4.style.display = "none";
	}
}

var slideIndex = 0;
showSlides();

function showSlides() {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");
	for (i = 0; i < slides.length; i++) {
	   slides[i].style.display = "none";  
	}
	slideIndex++;
	if (slideIndex > slides.length) {slideIndex = 1}    
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex-1].style.display = "block";  
	dots[slideIndex-1].className += " active";
	setTimeout(showSlides, 3000); // Change image every 2 seconds
}