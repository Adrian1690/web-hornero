function initMap() {

    var map = new google.maps.Map(document.getElementById('map'), {
        /*scrollwheel: false,*/
        zoom: 17,
        center: positionMap
    });

    //var image = 'img/flechitas.png';


    var beachMarker = new google.maps.Marker({
        position: positionMap,
        map: map
    });
}