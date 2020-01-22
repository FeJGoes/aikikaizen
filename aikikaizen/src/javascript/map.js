// Initialize and add the map
function initMap() {

    var latlng = {lat: -22.407249, lng: -47.5712232};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: latlng,
    });
    var request = {
        placeId: 'ChIJzexxXv7ax5QRZ0qWTwC_lCQ',
        fields: ['name', 'formatted_address', 'geometry'],
    };
    var infowindow = new google.maps.InfoWindow();
    var service = new google.maps.places.PlacesService(map);
    // service.getDetails(request, (info)=>{console.log(info)});


    service.getDetails(request, function(place, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
            var marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location
            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent('<div><strong>' + place.name + '</strong><br>'+ place.formatted_address +'</div>');
                infowindow.open(map, this);
            });
        }
    });
}
