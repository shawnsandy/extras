
function initMap() {
    var el = document.getElementById('g-map');
    var mapzoom = el.dataset.zoom ? Number(el.dataset.zoom) : 15;
    var scroll = el.dataset.scroll ? Number(el.dataset.scroll) : false;
    var uluru = {lat: Number(el.dataset.lat), lng: Number(el.dataset.lng)};
    var map = new google.maps.Map(el, {
        zoom: mapzoom,
        center: uluru,
        scrollwheel:  scroll
    });

    map.setOptions({
        scrollwheel: scroll
    });

    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}
