/*
Map Settings

	Find the Latitude and Longitude of your address:
		- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
		- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

*/

// Map Markers
var mapMarkers = [{
	address: "Calle Primavera 8, Granada, España",
	html: "<strong>Global Arte</strong><br>Calle Primavera 8, Granada, España<br><br><a href='#' onclick='mapCenterAt({latitude: 37.16230, longitude: -3.59585, zoom: 18}, event)'>[+] acercar</a>",
	icon: {
		image: baseurl+"/img/pin.png",
		iconsize: [26, 46],
		iconanchor: [12, 46]
	}
}];

// Map Initial Location
var initLatitude = 37.16230
var initLongitude = -3.59585;

// Map Extended Settings
var mapSettings = {
	controls: {
		panControl: true,
		zoomControl: true,
		mapTypeControl: true,
		scaleControl: true,
		streetViewControl: true,
		overviewMapControl: true
	},
	scrollwheel: false,
	markers: mapMarkers,
	latitude: initLatitude,
	longitude: initLongitude,
	zoom: 15
};

var map = $("#googlemaps").gMap(mapSettings);

// Map Center At
var mapCenterAt = function(options, e) {
	e.preventDefault();
	$("#googlemaps").gMap("centerAt", options);
}
