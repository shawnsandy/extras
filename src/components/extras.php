<?php

    Html::component(
        "gmap", "extras::g-maps.g-map", [
        "address" => "1600 Pennsylvania Ave NW, Washington, DC 20500",
        "style" => [],
        "options" => []
        ]
    );

    Html::component(
        "login", "extras::shared.login",
        []
    );

    Html::component(
        "socialSignIn", "extras::components.social-signup", [
        "title" => "Connect via social media" ,
        "providers" => ["facebook", "twitter", "github", "linkedin"]
        ]
    );

