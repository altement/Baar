$(function(){
    var bottomMargin = $("#bottomNavBar").height();
    $("body").css("margin-bottom", bottomMargin);
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
	$("html").on("swipeleft",function(){
	  	$('#sidebarMenu').animate({ 'width': '0px' }, 'medium', function(){
	        $('#sidebarMenu').hide();
	    });
	});
	$("html").on("swiperight",function(){
	  	$('#sidebarMenu').show();
	    $('#sidebarMenu').animate({ 'width': "90%" }, 'medium');
	});
});