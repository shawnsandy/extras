@extends("extras::layouts.layout")

@section("page_title", "Socailize");

@section("content");

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-default">
                <div class="panel-body">
                    @include("extras::partials.signup")
                </div>
            </div>

        </div>
    </div>
</div>

@endsection



