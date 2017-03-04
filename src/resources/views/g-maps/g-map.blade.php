@php
    $map = Gmap::getMapData($address);
@endphp

<div class="container">
    <div class="row">
        <div id="g-map" style="height: {{ $map_height or '560px' }}; width: 100%" data-lat="{{ $map["lat"] }}" data-lng="{{ $map["lng"] }}"></div>
    </div>
</div>

@push("scripts")
<script  src="/js/extras/g-maps.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYv1QR6VN_QjF73eoCJqKL57lk9FgTIUk&callback=initMap">
</script>
@endpush
