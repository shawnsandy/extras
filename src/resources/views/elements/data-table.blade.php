@php

    $columns = collect(collect($data)->first())
        ->keys()
        ->map(function ($item) {
            return "<td class=\"{$item}\">" . ucwords(str_replace("_", " ", $item)) . "</td>";
        });


    if(!isset($action_url))
   $action_url = url()->current()."/";


@endphp

<table id="{{ $table_id or 'data-tables'}}" class="table table-hover">
    <thead>
    <tr>
        @foreach($columns as $td)
            {!! $td !!}
        @endforeach
        <td style="max-width: 150px;" class="text-center">
            <button class="btn btn-default btn-xs"> Actions</button>
        </td>
    </tr>
    </thead>

    @include("extras::elements.table-rows", $data)


</table>




@push("styles")
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/v/bs-3.3.7/jqc-1.12.4/dt-1.10.15/b-1.3.1/datatables.min.css"/>
@endpush

@push("scripts")
    <script type="text/javascript"
            src="https://cdn.datatables.net/v/bs/jq-2.2.4/dt-1.10.15/b-1.3.1/r-2.1.1/datatables.min.js"></script>
    <script>


        var el = "{{ $table_id or "#data-tables"}}";
        var edit_url = "{{ $action_url }}";


        var table = $(el).DataTable({

});


    </script>

    {{--  <script src="/assets/extras/js/components/data-table.js"></script>  --}}
@endpush


