---
theme: theme.json
author: Gaellan
date: Jan 23, 2024
paging: Page %d sur %d
---

# Introduction à MongoDB

## Qu'est-ce que MongoDB ?

## Installation

## Chercher dans les données : find()

## Exercice : analyser une requête

## Insérer des données : insert()

## Exercices find et insert

## Affiner la recherche : les opérateurs

## Exercice requêtes

---

# Qu'est-ce que MongoDB ?

MongoDB est une base de données qui n'utilise pas le SQL, donc pas de système table / colonne. Elle stocke des documents, et n'utilise pas de structure ou de schéma de la base. Elle est particulièrement utile quand la structure des données est amenée à changer.

Les données dans MongoDb resemblent à du JSON. Voici une collection `students` qui contient deux étudiants :

```json
{
  "students": [

    {
      "_id": 1,
      "name": "Alan",
      "notes": [14, 17, 19, 20],
    },
    {
      "_id": 2,
      "name": "Alice",
      "notes": [19, 11, 20],
    }

  ]
}
``` 

---

# Installation et mise en place

Sur vos IDE de la 3WA, MongoDB est déjà installé, vous allez donc utiliser mongosh dans votre terminal pour manipuler votre base de données.

## Connexion à mongosh

```bash
mongosh "mongodb://username@mongodb.3wa.io:27017"
```
en remplacant `username` par votre username PhpMyAdmin, il vous demandera ensuite un password c'est également celui de votre PhpMyAdmin.

## Aller sur la bonne base de données

```bash
use username
```

## Importer les données

🔵 Vous n'avez besoin de faire l'import qu'une seule fois. Ensuite les données seront présentes et vous pourrez les manipuler.


Vous trouverez un fichier `restaurants.json` sur Discord, il contient les données de base pour les exercices. Sur votre IDE, créez un dossier `mongo` et mettez-y le fichier `restaurants.json`. Ouvrez ensuite un terminal dans ce dossier et faites la commande suivante :

```bash
mongoimport --db=username --collection=restaurants --drop --file=restaurants.json --host=mongodb.3wa.io --port=27017 --username=username --password=password --authenticationDatabase=admin
```

en remplacant `username` et `password` par vos infos.

---

# Chercher dans les données : find()

Les exemples suivants utilisent la collection `restaurants` que nous venons d'importer.

## Récupérer tous les documents d'une collection 

```js
db.restaurants.find({}); // tous les restaurants
```

## Récupérer avec des critères

```js
db.restaurants.find({borough : "Brooklyn"}); // tous les restaurants du quartier Brooklyn
```

## La structure d'une requête find

```js
db.collection.find(filtre, sélection);
```

donc 

```js
db.restaurants.find({borough : "Brooklyn"}, {_id: 0, name : 1});
```

Nous donnera le nom (et seulement le nom) de tous les restaurants du quartier Brooklyn.

🔵 L'id est par défaut toujours présent, pour ne pas l'avoir il faut préciser `_id : 0`.

---

# find() avec IN, AND et OR

## Opérateur IN

Si je voulais chercher dans une liste de quartiers je pourrais écrire :

```js
db.restaurants.find({borough : { $in : ["Brooklyn", "Bronx"] }}, {_id: 0, name : 1});
```

## Opérateur AND

```js
db.restaurants.find({borough : "Brooklyn", cuisine : "Burgers"}); // tous les restaurants de burgers de Brooklyn
```

est equivalent à

```js
db.restaurants.find({ $and : [{ borough : "Brooklyn"}, {cuisine : "Burgers"}]}); // tous les restaurants de burgers de Brooklyn
```

## Opérateur OR

```js
db.restaurants.find({ $or : [{ borough : "Brooklyn"}, {borough : "Bronx"}]}); // tous les restaurants de Brooklyn ou du Bronx
```

---

# Exercice : analyser une requête

À votre avis, que fait la requête suivante (sans l'exécuter) :

```js
db.restaurants.find(
  {
    borough: "Brooklyn",
    $or: [
              { name: /^B/ }, 
              { name: /^W/ }
           ],
  },
  { name: 1, borough: 1 }
);
```

---

# Insérer des données : insert()

## Ajouter un document : insertOne()

```js
db.restaurants.insertOne({
  _id: ObjectId(99999),
  name: "My French Bistrot",
  borough : "Brooklyn",
});
```

## Ajouter plusieurs documents : insertMany()

```js
db.restaurants.insertMany([
{
  _id: ObjectId(99998),
  name: "My Little Bakery",
  borough : "Queens",
},
{
  _id: ObjectId(99999),
  name: "My French Bistrot",
  borough : "Brooklyn",
}
	]);
```

---

# Exercices find() et insert()

Vous trouverez les 3 exercices dans le fichier `exercices-find-insert.md` sur Discord.

---

# Affiner la recherche : les opérateurs

## > >=

```js
$gt, $gte
```

## < <=

```js
$lt, $lte
```

## !==

```js
$ne
```

## Vérifier l'existence d'un champ

```js
$exists
```

## Vérifier la taille d'une liste

```js
$size
```

## Utilisation des Regex

Vous pouvez utiliser les RegEx dans vos requêtes `find()`.

---

# Exercices requêtes

Vous trouverez les exercices dans le fichier `exercices-requetes.md` sur Discord.



