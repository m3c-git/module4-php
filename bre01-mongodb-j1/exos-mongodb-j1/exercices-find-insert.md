# Exercices find() et insert()

## Exercice 1

Compter le nombre de restaurants dans le quartier de Brooklyn.

Pour compter le résultat d'une requête vous avez deux syntaxes possibles :

### Syntaxe avec une boucle JS

```js
let count = 0;
db.collection.find().forEach((doc) => count++); //Reponse Eddy: db.restaurants.find().forEach((doc) => count++);
```

### Utiliser la méthode count

```js
db.collection.find(query, restriction).count(); //Reponse Eddy: db.collection.find({}).count(); 
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

```js
db.restaurants.insertOne({
  _id: ObjectId(99999),
  address: {
      building: '165',
      street: 'Farragut Road'
    },
    borough: 'Brooklyn',
    cuisine: 'Burgers',
    grades: [
      {
        date: ISODate("2015-04-03T00:00:00.000Z"),
        grade: 'A+',
        score: 15
      },
      {
        date: ISODate("2021-06-06T00:00:00.000Z"),
        grade: 'A++',
        score: 18
      }
    ],
  name: "Freshly Burger",
  restaurant_id: '45872563'
});

```



## Exercice 3

Donnez les noms (et uniquement les noms) des restaurants ayant déjà obtenu le score de 20.

💡Pour vérifier un champ imbriqué dans l'objet utilisez la syntaxe `"objet.objet"`, par exemple :

```js
db.restaurants.find({"address.building" : 165}); // reponse Eddy: db.restaurants.find({"grades.score" : 20}, '{_id:0, name:1});
```