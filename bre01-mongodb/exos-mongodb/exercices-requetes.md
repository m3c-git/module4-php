# Exercices requêtes

## Exercice 1

Combien y a t il de restaurants qui font de la cuisine italienne et qui ont eu un score de 10 au moins ?

Affichez également le nom, les scores et les coordonnées GPS de ces restaurants. Ordonnez les résultats par ordre décroissant sur les noms des restaurants.

💡Remarque pour la dernière partie de la question utilisez la méthode sort :

```js
db.collection.find(query, restriction).sort({ key: 1 }); // 1 pour ordre croissant et -1 pour décroissant // Reponse Eddy: db.restaurants.find({"cuisine" : "Italian" , "grades.score" :{$gte:10}}).sort({ name : -1 });
```

## Exercice 2

Quels sont les restaurants qui ont eu un grade A et un score supérieur ou égal à 20 ?

Affichez uniquement les noms et ordonnez les par ordre décroissant. Affichez le nombre de résultat. <!-- Reponse Eddy: db.restaurants.find({"grades.score" : "A" , "grades.score" :{$gte:20}} , {_id:0 , name:1} ); -->


## Exercice 3

A l'aide de la méthode distinct trouvez tous les quartiers distincts de NY. <!-- Reponse Eddy: db.restaurants.distinct("borough"); -->

https://www.mongodb.com/docs/manual/reference/method/db.collection.distinct/


## Exercice 4

Trouvez tous les types de restaurants dans le quartiers du Bronx. Vous pouvez là encore utiliser distinct et un deuxième paramètre pour préciser sur quel ensemble vous voulez appliquer cette close.
<!--  Reponse Eddy: db.runCommand({distinct: "restaurants", key:"cuisine", query: {borough : "Bronx"}});-->


## Exercice 5

Trouvez tous les restaurants dans le quartier du Bronx qui ont eu 4 grades.
<!-- Reponse Eddy: db.restaurants.find({"borough" : "Bronx" , "grades" :{$size:4}} ); -->

## Exercice 6

Sélectionnez les restaurants dont le grade est A ou B dans le Bronx.
<!-- Reponse Eddy: db.restaurants.find({"borough" : "Bronx" , $or: [{"grades.grade" :"A"},{"grades.grade" :"B"}]}); -->

## Exercice 7

Même question mais, on aimerait récupérer les restaurants qui ont eu à la dernière inspection (elle apparaît théoriquement en premier dans la liste des grades) un A ou B. Vous pouvez utilisez la notion d'indice sur la clé grade :

```js
"grades.0.grade"; // équivalent de grades[0].grade en js
```
 <!-- Reponse Eddy: db.restaurants.find({"borough" : "Bronx" , $or: [{"grades.0.grade" :"A"},{"grades.0.grade" :"B"}]}); -->

## Exercice 8

Sélectionnez maintenant tous les restaurants qui ont le mot "Coffee" ou "coffee" dans la propriété name du document.

Utilisez une RegEx :

```js
/[cC]offee/
```
<!-- Reponse Eddy: db.restaurants.find({"name" : /[cC]offee/}, {_id:0, name:1}); -->

## Exercice 9

Même question mais uniquement dans le quartier du Bronx.
<!-- Reponse Eddy: db.restaurants.find({"name" : /[cC]offee/, "borough" : "Bronx"}, {_id:0, name:1});-->

## Exercice 10

Trouvez tous les restaurants avec les mots Coffee ou Restaurant et qui ne contiennent pas le mot Starbucks. Puis, même question mais uniquement dans le quartier du Bronx.
<!-- Reponse 1 Eddy: db.restaurants.find({"name" : /^((?!Starbucks).)/, $or: [{ "name" : /[cC]offee/, "name" : /[rR]estaurant/}]}, {_id:0, name:1});-->
<!-- Reponse 2 Eddy: db.restaurants.find({"name" : /^((?!Starbucks).)/, $or: [{ "name" : /[cC]offee/, "name" : /[rR]estaurant/}], "borough": "Bronx"}, {_id:0, name:1});-->

## Exercice 11

Trouvez tous les restaurants qui ont dans leur nom le mot clé coffee, qui sont dans le bronx ou dans Brooklyn, qui ont eu exactement 4 appréciations (grades).
<!-- Reponse Eddy: db.restaurants.find({"name" : /[cC]offee/, $or: [{ "borough": "Bronx", "borough": "Brooklyn"}], "grades" :{$size:4}}, {_id:0, name:1});-->

## Exercice 12

Affichez la liste des restaurants dont le nom commence et se termine par une voyelle.
<!-- Reponse Eddy: db.restaurants.find({"name" : /^[AaEeIiOoUu][a-zA-Z0-9_][AaEeIiOoUu]$/}, {_id:0, name:1});-->