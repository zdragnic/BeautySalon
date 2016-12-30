# BeautySalon

#### Zerina Dragnić 17149

Stranica informativnog karaktera o uslugama salona.



## SPIRALA 1

**I  - Šta je urađeno?** 

Napravljeno je 5 html fajlova. Na pocetnoj stranici nalaze se 2 forme (anketa i newsletter), te jedna forma (slanje poruke) na kontakt podstranici. Skice se nalaze u folderu Skice (5 skica za mobitel, 5 skica za desktop). Koristen je grid view, uradjen je responsive, te je koristen media query. Napravljen je meni koji se nalazi na svakoj podstranici.

**II  - Šta nije urađeno?**
/

**III - Bug-ovi koje ste primijetili ali niste stigli ispraviti, a znate rješenje (opis rješenja)**

Prilikom testiranja na svom laptopu sve dobro radi.

**IV  - Bug-ovi koje ste primijetili ali ne znate rješenje**

Prilikom testiranja na svom laptopu sve dobro radi.



**V  - Lista fajlova u formatu NAZIVFAJLA - Opis u vidu jedne rečenice šta se u fajlu nalazi**


pocetna.html - Pocetna stranica 

onama.html - Podstranica koja sadrzi informacije o salonu.

kusluge.html - Podstranica koja sadrzi informacije o kozmetickim uslugama koje salon nudi.

fusluge.html - Podstranica koja sadrzi informacije o frizerskim uslugama salona.

kontakt.html - Podstranica koja sadrzi formu za slanje poruka, mapu sa lokacijom.

Folder Skice- sadrzi skice desktop i mobilne verzije stranice

style.css - sadrzi css kod za stranicu


## SPIRALA 2

**I  - Šta je urađeno?** 
Uradjene su validacije formi (anketu nisam validirala jer nije bilo potrebe), poruke se ispisuju u labeli iznad dugmica za submit,
napravljen je localStorage na formi na podstranici kontakt.html, napravljen je carousel na podstranici onama.html, te je uradjen
ajax tako da se ucitava samo ono sto je promijenjeno. Ostavila sam da mi se forma submita prilikom klika na dugme, (da sam dodala onsubmit="return false;" ne bi se refreshalo i submitalo).

**II  - Šta nije urađeno?**
/

**III - Bug-ovi koje ste primijetili ali niste stigli ispraviti, a znate rješenje (opis rješenja)**
/

**IV  - Bug-ovi koje ste primijetili ali ne znate rješenje**

Prilikom refresha podstranice vraca me na pocetnu tj. (index.html), ne znam je li to trebalo ispraviti, ako jeste onda ne znam.




**V  - Lista fajlova u formatu NAZIVFAJLA - Opis u vidu jedne rečenice šta se u fajlu nalazi**


pocetna.html - Pocetna stranica 

index.html - sadrzi ono sto ostaje isto na svim stranicama (header i footer)

onama.html - Podstranica koja sadrzi informacije o salonu.

kusluge.html - Podstranica koja sadrzi informacije o kozmetickim uslugama koje salon nudi.

ffusluge.html - Podstranica koja sadrzi informacije o frizerskim uslugama salona.

kontakt.html - Podstranica koja sadrzi formu za slanje poruka, mapu sa lokacijom.

Folder Slike- sadrzi slike sa stranice

style.css - sadrzi css kod za stranicu

js.js - javascript fajl sa svim funkcijama


## SPIRALA 3

**I  - Šta je urađeno?** 
Uradjene su validacije formi sa php-om, napravljen je login, uradjena je serijalizacija podataka sa formi, te serijalizacija usluga koje salon nudi. Admin moze editovati podatke koji se odnose na usluge salona, te moze pregledati u pdf izvjestaju rezultate ankete, i poruke, a u csv fajlu se nalaze mailovi sa newsletter forme. Napravljena je pretraga po dva polja (naziv usluge i cijena), pretrazuje se kusluge.xml. Uradjen je deploy stranice na openshift. LINK ----> http://beautysalon-beautysalon.44fs.preview.openshiftapps.com/

**II  - Šta nije urađeno?**
/

**III - Bug-ovi koje ste primijetili ali niste stigli ispraviti, a znate rješenje (opis rješenja)**
/

**IV  - Bug-ovi koje ste primijetili ali ne znate rješenje**
/

**V  - Lista fajlova u formatu NAZIVFAJLA - Opis u vidu jedne rečenice šta se u fajlu nalazi**


pocetna.html - Pocetna stranica 

index.php - sadrzi ono sto ostaje isto na svim stranicama (header i footer)

onama.html - Podstranica koja sadrzi informacije o salonu.

kusluge.php - Podstranica koja sadrzi informacije o kozmetickim uslugama koje salon nudi.

ffusluge.php - Podstranica koja sadrzi informacije o frizerskim uslugama salona.

kontakt.php - Podstranica koja sadrzi formu za slanje poruka, mapu sa lokacijom.

Folder Slike- sadrzi slike sa stranice

style.css - sadrzi css kod za stranicu

js.js - javascript fajl sa svim funkcijama

pretraga.php - podstranica za pretragu

login.php , logout.php, session.php - fajlovi potrebni za login

livesearch.php - php fajl za pretragu

admin.php- adminova pocetna stranica

radsapodacima.php - adminova podstranica za editovanje podataka

anketarez.php - rezultati ankete koji se prikazuju korisniku klikom na dugme rezultati

fpdf181 folder - fajl za rad sa pdfom

lib - fajlovi potrebni za piechart na rezultatima ankete

Admin.xml - admin podaci

Anketa.xml - rezultati ankete

Fuskuge.xml i Kusluge.xml - usluge salona

Kontakt.xml - poruke sa kontakt podstranice

Newsletter.xml - mailovi sa newsletter fome

