@extends("extras::layouts.layout")

@section("page_title", "Socailize");

@section("content");

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-default">
                <div class="panel-body">

                    @if(!Auth::check())
                        <h3 class="text-center">Sign In Email / Password</h3>
                        <hr>
                        @include("extras::shared.login")
                    @endif
                    <h3 class="text-center">
                        <hr>
                        Connect Via Social Media
                        <hr>

                    </h3>

                    <p class="text-center">
                        <a href="/extras/github/auth" class="btn btn-default btn-lg">Github</a>


                        <a href="/extras/linkedin/auth " class="btn btn-default btn-lg">LinkedIn</a>


                        <a href="/extras/facebook/auth " class="btn btn-default btn-lg">Facebook</a>


                        <a href="/extras/twitter/auth" class="btn btn-default btn-lg">Twitter</a>
                    </p>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection



