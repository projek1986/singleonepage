<div id="lokalizacja" style="margin-top: 135px;" class="clearfix"></div>
<section>

    <!--var lat=52.2232999;-->
    <!--var lng=21.2564112;-->
    <!--var zoom=16;-->


    <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBj8EcR9QdiNpqaAKpW8HeRimciutIXqFI"></script>

    <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 14,
                    draggable: true,
                    scrollwheel: true,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(53.121411, 18.012, 17),

                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
//                    styles: [
//                        {
//                            "featureType": "administrative",
//                            "elementType": "labels.text.fill",
//                            "stylers": [
//                                {
//                                    "color": "#444444"
//                                }
//                            ]
//                        },
//                        {
//                            "featureType": "landscape",
//                            "elementType": "all",
//                            "stylers": [
//                                {
//                                    "color": "#f2f2f2"
//                                }
//                            ]
//                        },
//                        {
//                            "featureType": "landscape",
//                            "elementType": "labels.text",
//                            "stylers": [
//                                {
//                                    "visibility": "on"
//                                },
//                                {
//                                    "hue": "#ff0000"
//                                }
//                            ]
//                        },
//                        {
//                            "featureType": "poi",
//                            "elementType": "all",
//                            "stylers": [
//                                {
//                                    "visibility": "off"
//                                }
//                            ]
//                        },
//                        {
//                            "featureType": "road",
//                            "elementType": "all",
//                            "stylers": [
//                                {
//                                    "saturation": -100
//                                },
//                                {
//                                    "lightness": 45
//                                }
//                            ]
//                        },
//                        {
//                            "featureType": "road.highway",
//                            "elementType": "all",
//                            "stylers": [
//                                {
//                                    "visibility": "simplified"
//                                }
//                            ]
//                        },
//                        {
//                            "featureType": "road.arterial",
//                            "elementType": "labels.icon",
//                            "stylers": [
//                                {
//                                    "visibility": "off"
//                                }
//                            ]
//                        },
//                        {
//                            "featureType": "transit",
//                            "elementType": "all",
//                            "stylers": [
//                                {
//                                    "visibility": "off"
//                                }
//                            ]
//                        },
//                        {
//                            "featureType": "water",
//                            "elementType": "all",
//                            "stylers": [
//                                {
//                                    "color": "#10ade4"
//                                },
//                                {
//                                    "visibility": "on"
//                                }
//                            ]
//                        }
//                    ]
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(53.124411, 17.997777),
                    map: map,
                    title: 'Centrum Kongresowe „Opera Nova” (ul. Marszałka Focha 5)'
                });
                 var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(53.115466, 18.026673),
                    map: map,
                    title: 'Szpital Uniwersytecki Nr 2 im. dr Jana Biziela (ul. Ujejskiego 75)'
                });
             
            }
    </script>
    <!--var map;-->
    <!--var lat=52.2232999;-->
    <!--var lng=21.2564112;-->
    <!--var zoom=16;-->
    <div id="map" style="width: 100%; height: 480px;"></div>
</section>