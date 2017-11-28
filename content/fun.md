---
titleBreadcrumb: Fun

views:
    side-right:
        region: sidebar-right
        template: default/image
        data:
            class: "spread"
            src: "img/pig8.jpg"

    columns-below:
        region: columns-below
        template: default/columns
        data:
            class: spread column-below
            columns: [contentRoute: regions/pig1, contentRoute: regions/pig2, contentRoute: regions/pig3, contentRoute: regions/pig4]

    lmain:
        region: sidebar-left
        template: default/image
        data:
            class: "spread"
            src: "img/pig3.jpg"

    main:
        region: main
        template: default/image
        data:
            class: "spread"
            src: "img/pig7.jpg"
...
