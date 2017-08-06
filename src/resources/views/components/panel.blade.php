<aside class="panel">
    <div class="panel-body">
        <p class="{{ $title_class or "h3 title" }}">
         <i class="fa fa-{{ $icon or "circle-o" }}"></i> {{ $title or "Panel Title" }}
        </p>
        {{ $slot }}
        <div>

        </div>
    </div>
</aside>
