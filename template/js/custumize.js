$(document).ready(function(){
	$.ajax({
	    url: "site/site/getlocation",
	    type: "GET",
	    dataType: "json",
	    success: function(locations) { 
	        $("#mobile-location-dropdown .location-panel div.location-content").append(locations);
	    }
	});
});

