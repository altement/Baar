$(function(){
    var width = $(window).width()/1.25;

    $('.hamburger img').on('click', function(){
	    if( $('#sidebarMenu').is(':visible') ) {
	        $('#sidebarMenu').animate({ 'width': '0px' }, 'medium', function(){
	            $('#sidebarMenu').hide();
	        });
	    }
	    else {
	        $('#sidebarMenu').show();
	        $('#sidebarMenu').animate({ 'width': '90%' }, 'medium');
	    }
	});
	$("body").on("swipeleft",function(){
	  	$('#sidebarMenu').animate({ 'width': '0px' }, 'medium', function(){
	        $('#sidebarMenu').hide();
	    });
	});
	$("body").on("swiperight",function(){
	  	$('#sidebarMenu').show();
	    $('#sidebarMenu').animate({ 'width': width }, 'medium');
	});
});