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

<td class="text-center">
<a href="/{{ $action_url }}{{ $table_rows[0] }}" class="btn btn-xs btn-primary">
Edit/view
</a>
</td>

</tr>

@endforeach

</tbody>

