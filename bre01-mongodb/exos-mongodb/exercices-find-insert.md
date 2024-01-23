# Exercices find() et insert()

## Exercice 1

Compter le nombre de restaurants dans le quartier de Brooklyn.

Pour compter le résultat d'une requête vous avez deux syntaxes possibles :

### Syntaxe avec une boucle JS

```js
let count = 0;
db.collection.find().forEach((doc) => count++);
```

### Utiliser la méthode count

```js
db.collection.find(query, restriction).count();
```

Faites votre requête avec la méthode boucle JS puis comparez votre résultat à celui de la méthode count.


## Exercice 2

Vous allez devoir écrire la requête qui va insérer un nouveau restaurant :

Ce restaurant s'appelera "Freshly Burger", il proposera des burgers. 

Son adresse est le 165 Farragut Road dans le quartier de Brooklyn. 

L'id du restaurant est '45872563'. 

Il a été contrôlé 2 fois, 
la première le 03/04/2015, il a eu le grade 'A+' et la note de 15. 
La seconde fois le 06/06/2021, il a obtenu le grade 'A++' avec la note de 18.

Vérifiez bien ensuite que votre restaurant a bien été inséré.


## Exercice 3

Donnez les noms (et uniquement les noms) des restaurants ayant déjà obtenu le score de 20.

💡Pour vérifier un champ imbriqué dans l'objet utilisez la syntaxe `"objet.objet"`, par exemple :

```js
db.restaurants.find({"address.building" : 165});
```