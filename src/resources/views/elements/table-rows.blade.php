<tbody>
@foreach($data as $row)

@php
$table_rows = collect($row)->values()->all()
@endphp

<tr>
@foreach($table_rows as $td)
<td>
{{ $td }}
</td>
@endforeach
</tr>

@endforeach

</tbody>

