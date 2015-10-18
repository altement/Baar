$(function(){
	var bottomMargin = $("#bottomNavBar").height();
	var windowHeight = $(window).height();
	var mapHeight = (windowHeight - bottomMargin - 145)/2;
	$("#map").css("height", mapHeight);


	function initialize() {
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
        	center: new google.maps.LatLng(44.5403, -78.5463),
        	zoom: 8,
        	mapTypeId: google.maps.MapTypeId.ROADMAP
    	}
        var map = new google.maps.Map(mapCanvas, mapOptions)
    }
    google.maps.event.addDomListener(window, 'load', initialize);
});