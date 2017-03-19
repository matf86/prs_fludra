<template>
    <div id="map"></div>
</template>

<script>
    export default {

        props: ['address', 'zoomlevel'],
        data() {
            return {

            }
        },
        methods: {
            setCoordinates(map, marker) {
                let geocoder = new google.maps.Geocoder();

                geocoder.geocode( { 'address': this.address }, (results, status) => {
                    let cords = results[0].geometry.location;
                   
                    if (status == 'OK') {
                        map.setCenter(cords);
                        marker.setPosition(cords);
                    } else {
                        console.log('Geocode was not successful for the following reason: ' + status);
                    }
                });      
            },
            createMap() {
                let map = new google.maps.Map(document.getElementById('map'), {
                  center:{lat: 0, lng: 0},
                  zoom: this.zoomlevel,
                  streetViewControl: false,
                  rotateControl: false,
                  mapTypeControl: false,
                  scrollwheel: false,
                  styles:[{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#fcfcfc"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#fcfcfc"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#dddddd"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#dddddd"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#dddddd"}]}]
                });

                var icon = {
                    url: "./images/marker_PRS.png", 
                    scaledSize: new google.maps.Size(75, 85)
                };

                let marker = new google.maps.Marker({
                    map: map,
                    position:{lat: 0, lng: 0},
                    icon: icon
                });

                this.setCoordinates(map, marker);
            }        
        },
        mounted() {
            this.createMap();
        }
}
</script>
