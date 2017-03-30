@extends("extras::layouts.layout")

@section('title', 'Extras')

@section('page_title', 'Extras -- Google Maps')

@section('content')


   {{ Html::gmap("1600 Pennsylvania Ave NW, Washington, DC 20500", ["height" => '500px'], ['zoom' => 18]) }}


@endsection
