# Extras Signup 


### Social signup panel



**@include**
```blade
@include("extras::partials.signup")
```

**Signup src** `/views/partials/signup.blade.php`

```blade
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

```

### Network login

```blade
<div class="social-sign-in">
    {{ Html::networkLogin("Connect Via Social Media"  }}
</div>

// twitter and facebook only 
<div class="social-sign-in">
    {{ Html::networkLogin("Connect Via Social Media", ["facebook", "twitter"] ) }}
</div>
```
