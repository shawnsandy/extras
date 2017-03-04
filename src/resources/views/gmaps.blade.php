@extends("extras::layouts.layout")

@section('title', 'Extras')

@section('page_title', 'Extras -- Google Maps')

@section('content')


   @include("extras::g-maps.g-map", ["address" => "8328 Balm St Spring Hill, FL 34607", "map_height" => "700px"])

   {!! Extras::getView('address')  !!}

@endsection
