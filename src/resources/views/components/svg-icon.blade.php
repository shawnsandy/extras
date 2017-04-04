<i class="svg-icons">
    <svg style="height: {{ $style['height'] or '' }}; width: {{ $style['height'] or '' }};  fill: {{ $style['height'] or 'gray' }}; " class="svg {{ $icon_name or null }}">
        <use xlink:href="{{ $svg_sprite_path or null }}#{{ $icon_name or null }}"></use>
    </svg>
</i>
