<?php

    Html::component(
        "extrasMap", "extras::g-maps.g-map", [
        "address" => "1600 Pennsylvania Ave NW, Washington, DC 20500",
        "style" => [],
        "options" => []
        ]
    );

    Html::component(
        "extrasLogin", "extras::shared.login",
        []
    );

    Html::component(
        "extrasImg", "extras::components.img",
        []
    );

    Html::component(
        "networkLogin", "extras::components.social-signup", [
        "title" => "Connect via social media" ,
        "providers" => ["facebook", "twitter", "github", "linkedin"]
        ]
    );

