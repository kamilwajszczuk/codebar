 (function() {
	 function init() {
		 var mapOptions= {
         center: new google.maps.LatLng(52.2953423,21.0372513),
		 zoom: 10,
		 mapTypeId: google.maps.MapTypeId.ROADMAP
		
	    }
	 
		var map = new google.maps.Map(document.getElementById("#map"), mapOptions);
	 }
	 google.maps.event.addDomListener(window, 'load', init);



	 })();