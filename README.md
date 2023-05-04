# Client API

Adott egy létező ügyfél adatbázis, amely a cég ügyfél adatait tárolja. Ezek: név, cím, ügyfél kód (lehet üres), szerződés dátuma. Készíteni kell egy PHP API-t, ami egy nagyobb rendszer komponense lesz, melyen keresztül ki lehet listázni az adatokat, új ügyfelet lehet menteni, és meglévőket módosítani. Legyen lehetőség arra, hogy az adatokat tömbösítve mentsük. Az adatokat nem szükséges ellenőrizni. Ezeket a műveleteket a lehető legkevesebb végponttal kell kiszolgálni.

Az adatbázis réteg nem állandó, ezért könnyen cserélhetőnek kell lennie, illetve nem lehet közvetlenül elérni az API-ból (pl PDO-val vagy más egyéb könyvtárral). Az adatbázis egy meghatározott számú nyitott kapcsolatot tud fenntartani.

A nem érintett, megfogalmazott része az alkalmazásnak tetszőlegesen megvalósítható.

A feladat értékelése során vizsgált szempontok:
- Megvalósítás
- Kód értelmezhetőség
- Kód újrahasznosíthatóság
- Hibatűrés

## Megoldás
