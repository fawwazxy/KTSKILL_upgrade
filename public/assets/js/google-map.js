
var google;

// Define the init function globally
window.init = function() {
    console.log("Map is initializing...");

    // Use the fixed coordinates 5.3227646, 103.1300905
    var myLatlng = new google.maps.LatLng(5.3227646, 103.1300905); // Fixed location coordinates

    var mapOptions = {
        zoom: 10,  // Adjust zoom level as necessary
        center: myLatlng,
        scrollwheel: false,
        styles: [
            {
                "featureType": "administrative.country",
                "elementType": "geometry",
                "stylers": [
                    {
                        "visibility": "simplified"
                    },
                    {
                        "hue": "#ff0000"
                    }
                ]
            }
        ]
    };

    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);

    // Add a marker at the fixed location
    new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Fixed Location',  // Marker title
        icon: 'images/loc.png'  // Your custom icon, or remove this line to use the default marker
    });
}

// Ensure the map initializes when the API is loaded
google.maps.event.addDomListener(window, 'load', init);