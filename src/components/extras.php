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

    Html::macro('entypoStylesheet', function () {
        $css = "<link rel=\"stylesheet\" href=\"/assets/extras/entypo/style.css\">";
        return Extras::toHtmlString($css);
    });

    Html::macro('entypoFont', function ($name = "circle") {
        $icon = Extras::toHtmlString("<span class=\"entypo entypo-{$name}\"></span>");
        return $icon;
    });

    Html::macro('microTip', function() {
        $css = "<link rel=\"stylesheet\" href=\"/https://unpkg.com/microtip/microtip.css\">";

        return Extras::toHtmlString($css);
    });

    Html::macro('tooltip', function ($tip="Hey! Tip me", $position = 'up') {

        $tip = Extras::toHtmlString("aria-label=\"{$tip}\" data-microtip-position=\"{$position}\" role=\"tooltip\"  data-microtip-size=\"medium\"");

        return $tip;
    });

    Html::component("extrasLogin", "extras::shared.login", []);

    Html::component("choicesJs", "extras::shared.choices",[]);

    Html::component(
        "extrasPublic", "extras::components.img", [
            "image_params",
            "attributes" => [],
            "action" => "/extras/public/img/"
        ]
    );

    Html::component(
        "extrasStorage", "extras::components.img", [
            "action" => "/extras/img/",
            "image_params",
            "attributes" => [],
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
            "style",
            "svg_sprite_path" => "/assets/extras/svg/material-sprite.svg",
        ]
    );

    Html::component(
        "entypoIcon", "extras::components.svg-icon", [
            "icon_name",
            "style",
            "svg_sprite_path" => "/assets/extras/svg/entypo-sprite.svg",
        ]
    );

