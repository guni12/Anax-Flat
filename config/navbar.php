<?php
/**
 * Config-file for navigation bar.
 *

 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",
     
        // Here comes the menu structure
        "items" => [

            "hem" => [
                "text"  => t("Hem"),
                "url"   => $this->di->get("url")->create(""),
                "title" => t("Indexsidan")
            ],

            "report" => [
                "text"  => t("Kmom"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisningar från kmom uppgifter"),
                "mark-if-parent" => true
            ],

            "analysis" => [
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analyser av olika slag"),
                "mark-if-parent" => true
            ],

            "blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Blogg"),
                "mark-if-parent" => true
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om den här webbsidan")
            ],

            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("Testar Grid")
            ],

            "fun" => [
                "text"  => t("Fun"),
                "url"   => $this->di->get("url")->create("fun"),
                "title" => t("Fun?")
            ],

            "design" => [
                "text"  => t("D-el"),
                "url"   => $this->di->get("url")->create("design-element"),
                "title" => t("Design")
            ],

            "principle" => [
                "text"  => t("D-pr"),
                "url"   => $this->di->get("url")->create("design-principle"),
                "title" => t("Design-principle")
            ],

            "img" => [
                "text"  => t("Img"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("Images")
            ],

            "theme" => [
                "text"  => t("Tema"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Teman")
            ],

            "test" => [
                "text"  => t("Test"),
                "url"   => $this->di->get("url")->create("test"),
                "title" => t("Testar markdown")
            ],

            "typography" => [
                "text"  => t("Typog"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Typography")
            ],

            "sel" => [
                "text"  => t("Val"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Theme-selector")
            ],
        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",
     
        // Here comes the menu structure
        "items" => [

            "hem" => [
                "text"  => t("Hem"),
                "url"   => $this->di->get("url")->create(""),
                "title" => t("Indexsidan")
            ],

            "report" => [
                "text"  => t("Redovisningar"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisningar från kmom uppgifter"),
                "mark-if-parent" => true
            ],

            "analysis" => [
                "text"  => t("Analyser"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analyser av olika slag"),
                "mark-if-parent" => true
            ],

            "blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Blogg"),
                "mark-if-parent" => true
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om webbsidan")
            ],

            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("Testar Grid")
            ],

            "fun" => [
                "text"  => t("Fun"),
                "url"   => $this->di->get("url")->create("fun"),
                "title" => t("Fun?")
            ],

            "design" => [
                "text"  => t("Design element"),
                "url"   => $this->di->get("url")->create("design-element"),
                "title" => t("Design-element")
            ],

            "principle" => [
                "text"  => t("Design principle"),
                "url"   => $this->di->get("url")->create("design-principle"),
                "title" => t("Design-principle")
            ],

            "img" => [
                "text"  => t("Images"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("Images")
            ],

            "theme" => [
                "text"  => t("Theme"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Teman")
            ],

            "test" => [
                "text"  => t("MarkdownTest"),
                "url"   => $this->di->get("url")->create("test"),
                "title" => t("Testar markdown")
            ],

            "typography" => [
                "text"  => t("Typography"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Typography")
            ],

            "sel" => [
                "text"  => t("Välj tema"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Theme-selector")
            ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
