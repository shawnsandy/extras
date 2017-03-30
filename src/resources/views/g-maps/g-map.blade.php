@php
    $map = Gmap::getMapData($address);
@endphp
]
<div class="container">
    <div class="row g-map">
        <div id="g-map" style="height: {{ $style["height"] or '700px' }}; {{ $style["width"] or '100%' }}" data-lat="{{ $map["lat"] }}" data-lng="{{ $map["lng"] }}" data-zoom="{{ $options["zoom"] or '15'}}" data-scroll="{{ $options["scroll"] or 'true'}}" ></div>
    </div>
</div>

@push("scripts")
<script  src="/js/extras/g-maps.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYv1QR6VN_QjF73eoCJqKL57lk9FgTIUk&callback=initMap">
</script>
@endpush
