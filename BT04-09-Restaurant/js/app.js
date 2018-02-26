// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

// slider is used only on index.html
$(document).ready(function(){
	var s = $('.slider');
	
	if (s != undefined || s != null) {
		s.slick({
	    autoplay: true,
	    autoplaySpeed: 5000,
	    speed: 500
		});
	}
});