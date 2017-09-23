---
titleBreadcrumb: Grid

views:
    side-right:
        region: sidebar-right
        template: default/article
        sort: 1
        data:
            meta:
                type: content
                route: typography-side
...
Typography Test                                 {#header1}
==============================================

#### Underrubrik till vårt horisontella test. ####
Vi testar lite vanlig text. __Tyvärr__ _blir det helt olika_ i firefox och chrome.
Nu har jag valt att gå på firefox. Det gick bäst att få det att stämma där, åtminstone i min dator. Antalet pixlar ligger lydigt på 22 pixlar och olika jämna kalkyleringar av talet. Medan chrome plockar bort lite hela tiden.
Jag vill ju egentligen begripa det här med både ```markdown``` och med avstånden.

<div markdown="1">
Vi gör html till *sann* markdown text.
</div>

Här text med fotnot.[^1]

[^1]: Och här kommer fotnoten!

    En andra paragraf.


Font-size

:   Paragraf 1.

    Samma font-storlek från olika familjer skiljer sig  mycket åt i höjder. Pixel-storleken sätter em-storleken, som sedan styr den plats som bokstaven får ta. Till höjden på tecknet kommer en ascent och en descent, vilket tillsammans utgör en content-area. [https://iamvdo.me](https://iamvdo.me/en/blog/css-font-metrics-line-height-and-vertical-align)

:   Här bildas ännu en paragraf pga tom rad före.

content-area
:    den plats som bakgrunden för tecknet tar och ligger i mitten av line-height

line-height
:   line-height är inte avståndet mellan __baslinjer__ i css.

line-box

:   Från Vincent De Oliveira, se länken ovan, om man vill räkna mer

        height: calc(1px * var(--capital-height));

    > block quote
    > on two lines.

    1.  first list item
    2.  second list item
