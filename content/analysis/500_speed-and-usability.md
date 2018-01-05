##Hastighet##

###Mitt urval###
__Skatteverket__, en myndighet med en stor mängd information.

__Flickr__ - jag ville se hur en välkänd sida med många bilder skulle fungera.

__Amazon__ - ett erkänt skickligt webbföretag, jag tänkte att de borde vara bäst i klassen.

###Metod###

Jag har låtit [google](https://developers.google.com/speed/pagespeed/?csw=1) analysera webbsidorna.

Jag testade med utvecklingsverktygen, network, hos både firefox och chrome. Tre mätningar har gjorts på varje som resulterat i ett genomsnitt.

Resultatet med mätdata finns här: [Googel excel](https://docs.google.com/spreadsheets/d/e/2PACX-1vR7Xe33-U4OFwka6-LQ0qDLMNQZpSoncVItRh6odoURf8E4SoiChiBvJzjlSkIeNyDtqs7yBXGayU7x/pubhtml?gid=0&single=true)

En förklaring till rubrikerna i excel-filen:

1. Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
: Js block M/D - så mycket blockerar renderingen av sidan i mobil/dator
: Css block M/D

2. Prioritera synligt innehåll
: Synlighet prio - Så mkt kunde renderas av innehållet ovanför mitten på den färdiga sidan

3. Utnyttja cachelagring i webbläsare
: Cache M/D - så många resurser skulle kunna cachelagras

4. Optimera bilder
: Bild M/D - så mycket kan reduceras

5. Förminska CSS
: Css M/D - så mycket kan reduceras

6. Förminska JavaScript
: Js M/D - så mycket kan reduceras

7. Förminska Html
: Html M/D - så mycket kan reduceras

8. Aktivera komprimering
: Komp M/D - så mycket kan reduceras

9. Serversvar
: Tid - så lång tid tar det

10. Undvik omdirigeringar från målsidan
: Omdir -

Tom ruta betyder att resultatet var bra. Ett svar i rutan betyder samma resultat för både Mobil och Dator.

###Skatteverket.se###

[FIGURE src="cimage/imgd.php?src=skatteverket.png&save-as=jpg" class="right w50"]

[skatteverket](https://skatteverket.se)

[folkbokföring](https://skatteverket.se/privat/folkbokforing.4.18e1b10334ebe8bc800039.html)

[skattepengar till påsk](https://skatteverket.se/privat/deklaration/skattepengartillpask.106.57cadbbd15a3688ff4419c4.html)

Både javascript och css-filer försenar sidans rendering. Man bör lägga dem längre ner i flödet. Bilderna kan optimeras, css och js-skript kan komprimeras.

###Flickr###

[FIGURE src="cimage/imgd.php?src=flickr.png&save-as=jpg" class="right w50"]

[flickr favoriter](https://www.flickr.com/photos/flickr/favorites/)

[people](https://www.flickr.com/people/flickr/)

[grupper](https://www.flickr.com/people/flickr/groups/)

Flickr kan göra mycket kring sina bilder, upp till 60% förbättrings-potential finns. Kontakten till servern tar också väldigt lång tid. Det är verkligen märkbart när man går till deras sidor.

De har ibland så lågt som 2% prioritet på vad som syns först på en sida. Det skulle göra stor skillnad om de placerade koden i turordning.

###Amazon###

[FIGURE src="cimage/imgd.php?src=amazon.png&save-as=jpg" class="right w50"]

[amazon](https://www.amazon.com)

[julklappar](https://www.amazon.com/b?node=17276826011&_encoding=UTF8&ref=unrec_bubbler_3&pf_rd_m=ATVPDKIKX0DER&pf_rd_s=&pf_rd_r=1E886N4PZ96HKQ4X74H5&pf_rd_t=36701&pf_rd_p=f18b6a14-7633-4a8d-8697-6ab2650269f7&pf_rd_i=desktop)

[böcker](https://www.amazon.com/books-used-books-textbooks/b/ref=nav_shopall_bo_t3?ie=UTF8&node=283155)

Amazon har förvånansvärt stora brister vad gäller bildhantering, samt även turordning. De har filer som hindrar någonting alls från att renderas från start. Till och med html-kod kan effektiviseras bättre.

###Vanligaste förbättrings-områden###

Givetvis är andelen bilder på skatteverket mindre än hos de två andra företagen. Men generellt så kan alla "mina" webbplatser förbättra sin bildhantering. Där finns mycket tidsvinster att hämta. Om man bara tittar på network/img så står bilderna för en stor andel av tiden. 

Men också css och framför allt javascript tar ibland mycket tid och resurser, till min förvåning.

###Mitt betyg###

Det är inte helt solklart hur jag ska rangordna webbplatserna.

Så här tänker jag: 

1. __Amazon__, eftersom de har en enormt stor mängd olika data på sidorna och det fungerar ändå ganska bra och snabbt. De har visserligen en css-fil som helt stoppar upp processen, men den klaras av snabbt.
2. __Skatteverket__, de kan komprimera css och js bättre, men sidan går snabbast att ladda av de tre. 
3. __Flickr__, tuffast utmaning med alla sina kvalitets-bilder har de. Men över en sekunds väntan på servern, det är märkbart.

###Snabb långsam###

Jag upplever alla mina valda platser långsamma. En sekunds totalt hål, som med flickr, det är störande. En halv sekund tycker jag personligen kan vara acceptabelt, men så är jag också äldre och inte så snabb av mig. 

När jag tänker efter så beror det också på att det då och då finns störningar på nätet, så man vet inte alltid varför en sida är långsam. Men för varje år utvecklas tekniken och man kommer undermedvetet att kräva mer.

Inga gruppmedlemmar.
