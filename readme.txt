Feladatok:

1. Adatbázis létrehozása
   Hozd létre a "szaloncukor" nevű adatbázist és abban a "termekek" nevű táblát.
   A táblaszerkezetet a db.png mutatja. Az adatbázist töltsd fel kezdőadatokkal az insert.txt-ből!
   Értékelésnél fontos, hogy az adatbázis neve és a tábla neve egyezzen meg a kiadottal!

2. Fájlok létrehozása
   A feladatban minimum létrehozandó fájlok:
   	index.php
   	db_con.php
   	sql.php
   	header.php
   	footer.php

3. HTML oldalszerkezet kialakítása
   A mellékelt sablont darabold az oldalszerkezet kialakításához (header - main - footer)
   A szükséges dolgokat írd át a sablonban. 
   A title "Szaloncukor".
   A footer text a NEVED és az OSZTÁLYOD legyen. Pl.: "Kiss Béla - 14.SZ".

4. Menü létrehozása.
   Menü elemei: Szaloncukor hozzáadása  --> indexre mutat.
		Szaloncukor Wikipedia    --> https://hu.wikipedia.org/wiki/Szaloncukor url-re mutat; új ablakban nyíljon meg az oldal.

5. Szaloncukor hozzáadása oldal
   Az oldalon alkalmazz bootstrap grid-et a termékmegadás űrlap és az adatbázis lekérdezés táblázat elrendezéséhez.
   A grid  large méret alatt (992px) 1 hasábos legyen, ezen felül két hasábor legyen.
   A táblázat keretezett és csíkozott.
   Az oldalon belül alkalmazott címsorok H5-k.

6. Űrlap elemei: 
   Szaloncukor márkája:  -- szöveg típusú mező
   Szaloncukor íze:  -- szöveg típusú mező
   Csomag súlya: -- szám típusú mező
   Csomag ára: -- szám típusú mező
   18+ - csak felnőtteknek: -- jelölőnégyzet
   Szaloncukor hozzáadása: -- gomb

7. Űrlap validálása:
   Minden validálási üzenet az aktuális űrlapelem alatt jelenjen meg.
   Minden mező esetében (kivéve jelölőnégyzet) legyen üresség ellenörzés. 
   Hibaüzenet szövege az adott mező ürességére utal: "A márka megadása kötelező!" || "Az íz megadása kötelező!" || "A súly megadása kötelező!" || "Az ár megadása kötelező!" 
   A súly mezőben a minimum súly 100 g legyen, hiba esetén az üzenet: "Minimum ár 100 g!" !!Pont csak akkár jár, ha PhP-s üzenettel oldod meg a mező alatt!!   
   Az ár mezőben a minimum ár 100 Ft legyen, hiba esetén az üzenet: "Minimum ár 100 Ft!" !!Pont csak akkár jár, ha PhP-s üzenettel oldod meg a mező alatt!!

8. Űrlap beküldése:
   Sikeres validálás után a "Szaloncukor hozzáadása" gomb segítségével az adatok legyenek beleírva az adatbázisba.
   A gomb lenyomása után az index töltődjön be. 
   Az index betöltődésével az űrlapban eltárolt értékeket nullázd ki. 
   Az index betöltődésével egyidőben a táblázat is frissüljön, ne kelljen külön újratölteni az oldalt.

OPCIONÁLIS FELADATOK - plusz pontért unatkozóknak:
   NINCS ==> Szép csoport :)

!!BEADÁS!!
  Az egyész weboldalt tartalmazó mappádat CTRL+X-el !!helyezd át!! a kijelölt meghajtón lévő Saját neves mappádba.
  A létrehozott adatbázis eldobható.
   



