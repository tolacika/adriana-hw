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

### Requirements
- docker, docker-compose,
- php ^8.1
- Postman (exported collection at: `Adriana.postman_collection.json`)

### Install and run the application

```shell
composer install && sail up -d
```

Jelenleg MongoDB-re van beállítva az adatbázis driver, de a Laravel sajátosságainak köszönhetően az adatbázis réteg bármikor cserélhető.

### Endpoints

#### List all clients

GET: `/api/clients`

Returns a collection of clients

#### Show specific client

GET: `/api/clients/{clientId}`

Returns the requested client

#### Create a new client

PUT: `/api/clients/create`

body params example:
```json
{
    "name": "John Doe",
    "address": "Address line",
    "client_id": null,
    "contracted_at": "2022-11-12"
}
```

Returns a newly created client

#### Create multiple clients

PUT: `/api/clients/batch`

body params example:
```json
{
    "clients": [
        {
            "name": "Jane Doe",
            "address": "Address line",
            "client_id": "CL-000-012",
            "contracted_at": "2022-11-12"
        },
        {...}
    ]
}
```

Returns a collection of newly created clients

#### Update a client

POST: `/api/clients/{clientId}`

body params example:
```json
{
    "name": "John LongerName Doe",
    "address": "Address line2",
    "client_id": null,
    "contracted_at": "2022-11-12"
}
```

Returns the updated client

#### Delete a client

DELETE: `/api/clients/{clientId}`

Deletes the client and returns with the old (deleted) data
