@if(!Auth::check())
    <h3 class="text-center">Sign In Email / Password</h3>
    <hr>
    {{ Html::extrasLogin() }}
@endif

<hr>
<p class="text-center">
    <a href="/register" class="btn btn-default btn-lg btn-block">
        Site Registration
    </a>
</p>
<hr>

<div class="social-sign-in">
    {{ Html::networkLogin("Connect Via Social Media") }}
</div>
