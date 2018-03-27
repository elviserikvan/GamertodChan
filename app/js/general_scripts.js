$(function () {
	
	// Zoom in the pictures
	$("img").click(function() {
		$(this).toggleClass('small');
		$(this).toggleClass('large');
	});


	// Stop the redirection in the date of the threads
	$('.date').click((e) => {
		e.preventDefault();
		console.log('triggered!!!');
	});
});