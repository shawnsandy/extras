<?php

Html::component(
    "extrasMap", "extras::g-maps.g-map", [
        "address" => "1600 Pennsylvania Ave NW, Washington, DC 20500",
        "style" => [],
        "options" => []
    ]
);

Html::component("fontIcon", "dash::components.icon", [
    'name' => "circle-o",
    "selector" => "fa fa-"
]);

Html::component( "extrasLogin", "extras::shared.login", [] );

Html::component(
    "extrasImg", "extras::components.img", [
        "image_params",
        "attributes" => [],
        "action" => "/extras/public/img/"
    ]
);

Html::component(
    "networkLogin", "extras::components.social-signup", [
        "title" => "Connect via social media",
        "providers" => ["facebook", "twitter", "github", "linkedin"]
    ]
);

/*
 * SVG icons
 * */
Html::component(
    "materialIcon", "extras::components.svg-icon", [
        "icon_name",
        "svg_sprite_path" => "/assets/extras/svg/material-sprite.svg",
    ]
);

Html::component(
    "entypoIcon", "extras::components.svg-icon", [
        "icon_name",
        "svg_sprite_path" => "/assets/extras/svg/entypo-sprite.svg",
    ]
);

