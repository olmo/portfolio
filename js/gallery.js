$(document).ready(function() {
	$('.centerthumbs img').css({
			'height': '200px'
		});


	// Using default configuration
	$("#related").carouFredSel();
	
	// Using custom configuration
	$("#foo2").carouFredSel({
		items				: 2,
		direction			: "up",
		scroll : {
			items			: 1,
			easing			: "elastic",
			duration		: 1000,							
			pauseOnHover	: true
		}					
	});	
});
