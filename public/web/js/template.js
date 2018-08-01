$(document).ready(function(){
    var url = $('meta[name="url-website"]').attr('content')+'/';
    var token = $('meta[name="csrf-token"]').attr('content');

    // Global token
    window.token = token;

    // Route
    var route = [url+'select-dynamic', url+'contact', url+'read_more_propierty/'];

    // Load functions
    ajax.select_dynamic(route);
    ajax.read_more_propierty(route);
    ajax.contact(route);
    ajax.paginate();

	// Mobile menu
	$('.mobile-menu-icon').click(function(){
		$('.tm-nav').toggleClass('show');
	});
  
  	$('body').bind('touchstart', function() {});
});