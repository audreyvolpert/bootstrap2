$(document).ready(function() {
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
	// $('#news-carousel').carousel({
	//   interval: 4000
	// });
	$('#video-carousel').carousel({
	  interval: 5000
	});
	
	/*start main carousel using owl carousel*/
     $("#footy-carousel").owlCarousel({
 
		navigation : false, // Show next and prev buttons
		slideSpeed : 500,
		paginationSpeed : 400,
		singleItem:true
		 
		// "singleItem:true" is a shortcut for:
		// items : 1,
		// itemsDesktop : false,
		// itemsDesktopSmall : false,
		// itemsTablet: false,
		// itemsMobile : false
		 
		});
     /*end main carousel using owl carousel*/

});    