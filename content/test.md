---
titleBreadcrumb: Markdown

class: mark-border
...


Testar Markdown
==============================================
[Referera med nummer (Se mer vad du kan göra)][1]

Lägger in en bild för att testa `picture` och `srcset`

<picture>
    <!-- 16:9 crop -->
    <source
        media="(min-width: 36em)"
        srcset="img/botanik/large/large.jpg  1920w,
                img/botanik/large/medium.jpg  960w,
                img/botanik/large/small.jpg   480w" />
    <!-- square crop -->
    <source
        srcset="img/botanik/square/large.jpg  822w,
                img/botanik/square/medium.jpg 640w,
                img/botanik/square/small.jpg  320w" />
    <img
        src="img/botanik/large/medium.jpg"
        alt="Botaniska växter på Kanarieöarna" />
</picture>

> Ett viktigt citat

#### En h4 rubrik ####

apples
  : Good for making applesauce.
oranges
  : Citrus!
tomatoes
  : There's no "e" in tomatoe.

| Tables        | Are           | Cool  |
| ------------- |:-------------:| -----:|
| col 3 is      | right-aligned | $1600 |
| col 2 is      | centered      |   $12 |
| zebra stripes | are neat      |    $1 |

    # Så här ser det ut som kod ...
    for i in 1 .. 10 { do-something(i) }

~~~
define foobar() {
    print "Välkommen!";
}
~~~

Lite `kod som jag stoppat in` här

Här är ett foto från [www.behovsbo.se](http://www.behovsbo.se/):
![från behovsbo.se](http://www.behovsbo.se/themes/images/bbbmaterial.jpg "Material")

[1]: https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet#links

