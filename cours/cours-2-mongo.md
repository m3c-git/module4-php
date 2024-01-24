---
theme: theme.json
author: Gaellan
date: Jan 24, 2024
paging: Page %d sur %d
---

# Introduction à MongoDB

## Modifier des données : update()

## Supprimer des données : delete()

## Exercices update() et delete()

## Modifications avancées : switch()

## Exercices switch()

## Évaluation

---

# Modifier des données : update()

## Modifier un document : updateOne

### Structure

```js
db.collection.updateOne(critère de recherche, modifications avec $set);
```

### Exemple

Je veux modifier l'unité de mesure de de la taille, et le statut du premier document qui a le statut B.

```js
db.inventory.updateOne(
   { status: "B" },
   {
     $set: { "size.uom": "cm", status: "X" },
     $currentDate: { lastModified: true }
   },
   {"upsert": true}
);
```

Si je veux créer mon document s'il n'existe pas, je dois ajouter la propriété `upsert` :


## Modifier plusieurs documents : updateMany

Si plusieurs documents répondent à vos critères de sélection, ils seront tous modifiés.

```js
db.inventory.updateMany(
   { status: "B" },
   {
     $set: { "size.uom": "cm", status: "X" },
     $currentDate: { lastModified: true }
   }
);
```

---

# Aller plus loin dans l'update

## Ajouter des valeurs (sans doublon) à un tableau imbriqué : addToSet

Si je veux ajouter une valeur en évitant les doublons dans un tableau imbriqué du document, j'utilise l'opérateur `addToSet`.

```js
db.inventory.updateOne(
   { society: "Phil" },
   { $addToSet: { tags: "gray" } } // ["gray", "blue" ] // n'ajoute pas gray si celui existe déjà dans ce tableau
);
```

## Ajouter une valeur (avec doublons) à un tableau imbriqué : push

Si je veux ajouter une valeur à un tableau imbriqué même si elle existe déjà, j'utilise l'opérateur `push`.

```js
db.inventory.updateOne(
   { society: "Phil" },
   { $push: { tags: "blue" } } // ["gray", "blue", "blue" ] ajoute la valeur même si elle existe déjà
);
```

---

# Opérateurs mathématiques

## Addition : inc

```js
db.inventory.updateOne(
    { society: "Alan" },
    { $inc: { qty: 5 } }
); 
```

## Soustraire : inc négatif

```js
db.inventory.updateOne(
    { society: "Alan" },
    { $inc: { qty: -5 } }
); 
```

## Mutiplier : mul

```js
db.inventory.updateOne(
    { society: "Alan" },
    { $mul: { qty: 1.5 } }
); 
```

## Diviser avec mul

```js
let divideBy = 2;
let multiplyBy = 1/divideBy;

db.inventory.updateOne(
    { society: "Alan" },
    { $mul: { qty: multiplyBy } }
);
```

---

# Supprimer des données : delete()

## Supprimer tous les documents

```js
db.inventory.deleteMany({});
```

## Supprimer des documents en fonction de critères

```js
db.inventory.deleteMany({ qty : { $gte : 100 }});
```

## Supprimer un document

```js
db.inventory.deleteOne( { "_id" : ObjectId("563237a41a4d68582c2509da") } );
```

## Supprimer un champ : unset

```js
   db.inventory.updateOne(
      { status: "A" },
      { $unset: { qty: "", status: "" } }, // supprime les champs entre les accolades
   );
```

---

# Exercices update() et delete()

Vous trouverez les exercices dans le fichier `exercices-update-delete.md` sur Discord.

---

# Modification avancée : switch

Dans MongoDB, l'opérateur switch permet de modifier un document selon une liste de cas, un peu comme des conditions `if else if`.

## Exemple

Je veux modifier tous les types des documents en traduisant leurs noms :

Je récupère les types de documents pour construire mon switch :

```js
db.inventory.distinct('type'); // [ 'journal', 'lux paper', 'notebook', 'planner', 'postcard' ]
```

Ensuite je construis mon switch :

```js
$switch: {
    branches : [
        // en fonction de la valeur du champ type, on génère une nouvelle valeur
        { case: { $eq: ['type', 'journal'] }, then: 'Actualité' },
        { case: { $eq: ['type', 'lux paper'] }, then: 'Papier LUX' },
        { case: { $eq: ['type', 'notebook'] }, then: 'Carnet' },
        { case: { $eq: ['type', 'planner'] }, then: 'Calendrier' },
        { case: { $eq: ['type', 'postcard'] }, then: 'Carte Postale' },
    ],
    default: 'Pas de type'
}
```

Attention à l'ordre de vos case : seul le premier qui correspond sera appliqué, donc allez toujours du plus précis au moins précis :

Imaginons que vous voulez un comportement particulier si une note est supérieure à 10, et un autre comportement si une note est supérieure à 15. Vous devez placer la condition "supérieure à 15" en premier.

---

# Exemple d'un switch dans un update

```js
db.inventory.updateMany(
    // pour tous les documents qui ont un type
    { type: { $exists : true } },
    {
        $set : {
            type : {
                $switch: {
                    branches : [
                        // en fonction de la valeur du champ type, on génère une nouvelle valeur
                        { case: { $eq: ['type', 'journal'] }, then: 'Actualité' },
                        { case: { $eq: ['type', 'lux paper'] }, then: 'Papier LUX' },
                        { case: { $eq: ['type', 'notebook'] }, then: 'Carnet' },
                        { case: { $eq: ['type', 'planner'] }, then: 'Calendrier' },
                        { case: { $eq: ['type', 'postcard'] }, then: 'Carte Postale' },
                    ],
                    default: 'Pas de type'
                }
            }
        }
    }
);
```

---

# Exercices switch

Vous trouverez les exercices dans le fichier `exercices-switch.md` sur Discord.

---

# Évaluation