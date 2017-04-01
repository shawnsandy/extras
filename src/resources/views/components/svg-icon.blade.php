<svg class="material-icons {{ $attributes["class"] or "icon" }}">
    <use xlink:href="{{ $svg_sprite_path or null }}#{{ $icon_name or null }}"></use>
</svg>
