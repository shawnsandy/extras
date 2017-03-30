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
                        {{ Html::login() }}
                    @endif

                    <hr>

                    <div class="social-links">
                    {{ Html::socialSignIn("Connect Via Social Media", ["facebook", "twitter"] ) }}
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection



