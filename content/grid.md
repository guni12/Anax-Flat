---
titleBreadcrumb: Grid

views:
    side-pull-right:
        region: sidebar-right
        template: default/article
        sort: 1
        data:
            class: pull-right
            meta:
                type: content
                route: regions/side-pull-right

    side-right:
        region: sidebar-right
        template: default/article
        sort: 1
        data:
            meta:
                type: content
                route: regions/side-right

    columns-above:
        region: columns-above
        template: default/article
        sort: 0
        data:
            meta:
                type: content
                route: regions/columns-above

    columns-below:
        region: columns-below
        template: default/columns
        sort: 0
        data:
            class: column-below
            columns: [contentRoute: regions/col-below1, contentRoute: regions/col-below2, contentRoute: regions/col-below3, contentRoute: regions/col-below4]


    lmain:
        region: sidebar-left
        template: default/article
        sort: 2
        data:
            meta:
                type: content
                route: regions/sidebar-left

    amain:
        region: after-main
        template: default/content
        sort: 2
        data:
            meta:
                type: content
                route: regions/after-main

    body-end:
        region: body-end
        template: default/content
        sort: 0
        data:
            meta:
                type: content
                route: body-end
...

Testar Grid
===========

Här är __main-regionen__, när vi testar olika fält.
