<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",
    
    "themes" => [

        "separator0" => "------------------------------------------------",

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "default",
            "stylesheets" => [
                "css/dark.min.css"
            ]
        ],

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "base",
            "stylesheets" => [
                "css/base.min.css"
            ]
        ],


        "separator01" => "------------------------------------------------",

        "vgrid"      => [
            "title"      => "Vertical grid",
            "class"      => "vgrid",
            "stylesheets" => [
                "css/vgrid.min.css"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => ["css/light.min.css"]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "color",
            "stylesheets" => ["css/tinycolor.min.css"]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => ["css/dark.min.css"]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => ["css/triad.min.css"]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "light",
            "stylesheets" => ["css/typo.min.css"]
        ],

        "separator2" => "------------------------------------------------",

        "fun"       => [
            "title"      => "All fun, test and play, make it stand out!",
            "class"      => "fun",
            "stylesheets" => ["css/fun.min.css"]
        ],

        "separator3" => "------------------------------------------------",

        "photo"       => [
            "title"      => "Designelements, photo",
            "class"      => "photo",
            "stylesheets" => ["css/photo.min.css"]
        ],

        "line"       => [
            "title"      => "Designelements, line",
            "class"      => "line",
            "stylesheets" => ["css/line.min.css"]
        ],

        "motion"       => [
            "title"      => "Designelements, motion",
            "class"      => "motion",
            "stylesheets" => ["css/motion.min.css"]
        ],

        "balance"       => [
            "title"      => "Designprinciples, balance",
            "class"      => "balance",
            "stylesheets" => ["css/balance.min.css"]
        ],

        "moremotion"       => [
            "title"      => "Designprinciples, moving, variation",
            "class"      => "moremotion",
            "stylesheets" => ["css/moremotion.min.css"]
        ],

        "bad"       => [
            "title"      => "It does not work",
            "class"      => "bad",
            "stylesheets" => ["css/bad.min.css"]
        ],
    ]
];
