@extends("extras::layouts.layout")

@section("page_title", "Contact Us")

@section("content")

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include("extras::shared.contact-form", ["action" => "/sendmail"])
            </div>
        </div>
    </div>

@endsection
