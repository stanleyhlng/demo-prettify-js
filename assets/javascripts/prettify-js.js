(function(jQuery){
	
	var main = function() {
		
		// initialize Prettify.JS module
		console.log( 'main' );	
		prettyPrint();
	
		// initialize scroll-spy
		$('#navbar').scrollspy();
	};

	// fix sub nav on scroll
	var $win = $(window);
	var $nav = $('.subnav');
	var navTop = $('.subnav').length && $('.subnav').offset().top - 40;
	var isFixed = 0;

	processScroll();

	// hack sad times - holdover until rewrite for 2.1
	$nav.on('click', function () 
		{
			if (!isFixed) {
				setTimeout(function () { $win.scrollTop($win.scrollTop() - 47) }, 10);
			}
		}
	);
		
	$win.on('scroll', processScroll);
	
	function processScroll() 
	{
		var i;
		var scrollTop = $win.scrollTop();
		if (scrollTop >= navTop && !isFixed) 
		{
			isFixed = 1;
			$nav.addClass('subnav-fixed');
		} 
		else if (scrollTop <= navTop && isFixed) 
		{
			isFixed = 0;
			$nav.removeClass('subnav-fixed');
		}
	} 

	jQuery( document ).ready( main );

}(jQuery))