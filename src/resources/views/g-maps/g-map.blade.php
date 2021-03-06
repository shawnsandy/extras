@php
    $map = Gmap::getMapData($address, config("extras.settings.keys.google_maps_api_key"));
@endphp

<div class="g-map">
    <div id="g-map" style="height: {{ $style["height"] or '700px' }}; {{ $style["width"] or '100%' }}"
         data-lat="{{ $map["lat"] }}" data-lng="{{ $map["lng"] }}" data-zoom="{{ $options["zoom"] or '15'}}"
         data-scroll="{{ $options["scroll"] or 'true'}}"></div>
</div>

@push("scripts")

<script src="/js/extras/g-maps.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{ config("extras.settings.keys.google_maps_api_key") }}&callback=initMap">
</script>

@endpush
