$(function(){
    

    $('.hamburger img').on('click', function(){
	    if( $('#sidebarMenu').is(':visible') ) {
	        $('#sidebarMenu').animate({ 'width': '0px' }, 'medium', function(){
	            $('#sidebarMenu').hide();
	        });
	        $('#mainContent').animate({ 'margin-left': '0px' }, 'medium');
	    }
	    else {
	        $('#sidebarMenu').show();
	        $('#sidebarMenu').animate({ 'width': '800px' }, 'medium');
	    }
	});
});