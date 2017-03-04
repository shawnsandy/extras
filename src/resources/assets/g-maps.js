/**
 * Created by shawnsandy on 2/22/17.
 */

function initMap() {
    var el = document.getElementById('map');
    var uluru = {lat: Number(el.dataset.lat), lng: Number(el.dataset.lng)};
    console.log(uluru);
    var map = new google.maps.Map(el, {
        zoom: 15,
        center: uluru,
        scrollwheel:  false
    });

    map.setOptions({
        scrollwheel: false
    });

    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}


