function initMap() {
	// Map Options
	var options = {
		zoom: 5,
		center: { lat: -2.548926, lng: 118.0148634 } // lat-lng : indonesia
	};

	// New Map
	var map = new google.maps.Map(document.getElementById("map"), options);

	// Listen for click on map
	google.maps.event.addListener(map, "click", function(event) {
		// Add Marker
		addMarker({ coords: event.latLng });
	});

	// Kalimantan Barat : lat: 0.0, lng: 109.333336
	var kalimantanBarat = { lat: -2.548926, lng: 118.0148634 };
	const BASE_URL = "http://localhost/sisfo-pemetaan-pemanfaatan-lahan/";

	let indonesia = {
		nama: "Indonesia",
		gambar: "assets/img/home/indonesia.jpg"
	};

	var markers = [
		{
			coords: kalimantanBarat,
			iconImage: BASE_URL + "assets/icon/marker/marker3.png",
			content: `<h2 class="text-center">${indonesia.nama}</h2>
                <img src="${BASE_URL +
									indonesia.gambar}" width="100%" height="200px">
                <p class="mt-3">Latitude : ${options.center.lat}, Longitude : ${
				options.center.lng
			}</p>
               `
		}
	];

	// Loop through markers
	for (let i = 0; i < markers.length; i++) {
		// Add Marker
		addMarker(markers[i]);
	}

	// Add Marker Function
	function addMarker(props) {
		var marker = new google.maps.Marker({
			position: props.coords,
			map: map
		});

		// check for custom icon
		if (props.iconImage) {
			// set icon image
			marker.setIcon(props.iconImage);
		}

		// check for content
		if (props.content) {
			var infoWindow = new google.maps.InfoWindow({
				content: props.content
			});

			marker.addListener("click", function() {
				infoWindow.open(map, marker);
			});
		}
	}
}
