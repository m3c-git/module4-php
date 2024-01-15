---
theme: theme.json
author: Gaellan
date: Jan 12, 2024
paging: Page %d sur %d
---

# Introduction à SQL et MySQL

## Plan du cours

### SQL et MySQL

### Tables et colonnes

### Types de données

### Lire des données

### Ajouter des données

### Modifier des données

### Supprimer des données

---

# SQL et MySQL

Il existe de nombreux moyens de gérer des bases de données, nous allons utiliser MySQL.

## MySQL

MySQL est un SGBD ( Système de Gestion de Base de Données), plus exactement même c'est un SGBDR (Système de Gestion de Bases de Données Relationnelles).

Pourquoi on utilise celui-ci ? C'est le plus connu et le plus courant, tout bêtement.

## SQL

Le SQL (Structured Query Language) est un language qui nous permet de discuter avec MySQL.

## CRUD

Nous allons utiliser MySQL pour faire 4 grands types d'actions :

### Create

Pour créer des entrées dans les tables.

### Read

Pour lire des entrées dans les tables

### Update

Pour modifier des entrées dans les tables

### Delete

Pour supprimer des entrées dans les tables

---

# Tables et colonnes

MySQL et SQL représentent les données sous forme de tables, composées de colonnes.

Chaque table représente un type de données, par exemple dans une table films, la table représente une liste de films.

Chaque ligne de la table est une donnée elle-même (e.g un film) et chaque colonne un attribut de cette table (titre, durée, casting, ...)

---

# Types de données

Vous pouvez trouver la liste des types de données disponibles ici : https://fr.wikibooks.org/wiki/MySQL/Types_de_donn%C3%A9es.

Les principaux sont :

## varchar

`varchar` représente une chaine de caractères

## int

`int` représente un nombre entier

## datetime

`datetime` représente une date avec année, mois, jour, heure, minute, seconde

Les relations sont représentées par des foreign keys, qui sont en fait une sorte de lien hypertexte vers la colonne de la table ciblée.

---

# Lire des données

## Nos tables d'exemple

### movies

| id | title | year | director |
| -- | ----- | ----- | ----------- |
| 1 | Alien, le 8ème passager | 1979 | 1 |
| 2 | Aliens, le retour | 1986 | 2 |
| 3 | Aliens 3 | 1992 | 3 |
| 4 | Aliens, la résurrection | 1997 | 4 |
| 5 | Titanic | 1997 | 2 |
| 6 | Gladiator | 2000 | 1 |
| 7 | Le fabuleux destin d'Amélie Poulain | 2001 | 4 |

### directors

| id | name | country |
| -- | --- | ---- |
| 1 | Ridley Scott | USA |
| 2 | James Cameron | Canada |
| 3 | David Fincher | USA |
| 4 | Jean-Pierre Jeunet | France |


## SELECT

### Sélectionner une colonne

```sql
SELECT nom_de_la_colonne FROM nom_de_la_table
```

C'est la version la plus simple possible d'un `SELECT`.

```sql
SELECT title FROM movies
```

Nous enverra chacun des titres de la table `movies`.

---

# Lire des données (suite)

## SELECT

### Sélectionner plusieurs champs

```sql
SELECT nom_de_la_colonne_1, nom_de_la_colonne2 FROM nom_de_la_table
```

Il suffit de lister les colonnes, séparées par une virgule.


### Sélectionner toutes les colonnes

```sql
SELECT * FROM nom_de_la_table
```

On utilise le raccourci `*`.


---

# Lire des données (suite)

## WHERE

Si on veut sélectionner des colonnes sous certaines conditions, il faut utiliser une clause `WHERE` dans notre `SELECT`.

```sql
SELECT * FROM movies WHERE director = 2
```

Nous renverra toutes les colonnes des films du réalisateur 2. 

```sql
SELECT * FROM movies WHERE year > 1999
```

Nous renverra toutes les colonnes des films après 1999 (Gladiator).

Si vous avez besoin de conditions multiples, vous pouvez utiliser `AND` et `OR`.

```sql
SELECT * FROM movies WHERE year > 1999 AND director = 4
```

nous renverra Le fabuleux destin d'Amélie Poulain.

---

# Lire des données (suite)

## ORDER BY

Par défaut les entrées seront retournées du plus petit `id` au plus grand mais nous pouvons modifier ce comportement avec `ORDER BY`.

Soit en changeant la colonne qui sert d'ordre : 

```sql
SELECT * FROM movies ORDER BY year
```

soit en modifiant l'ordre avec `ASC` (du plus petit au plus grand) ou `DESC` (du plus grand au plus petit) :

```sql
SELECT * FROM movies ORDER BY year DESC
```

---

# Lire des données (suite)

## LIMIT

En cas de besoin nous pouvons limiter le nombre de résultats retournés (par exemple pour économiser les ressources ou mettre en place une pagination) :

```sql
SELECT * FROM movies LIMIT 3
```

retournera : 

| id | title | year | director |
| -- | ----- | ----- | ----------- |
| 1 | Alien, le 8ème passager | 1979 | 1 |
| 2 | Aliens, le retour | 1986 | 2 |
| 3 | Aliens 3 | 1992 | 3 |


Et toutes ces commandes peuvent être mélangées :

```sql
SELECT * FROM movies WHERE year > 1990 ORDER BY year DESC LIMIT 2
```

| id | title | year | director |
| -- | ----- | ----- | ----------- |
| 7 | Le fabuleux destin d'Amélie Poulain | 2001 | 4 |
| 6 | Gladiator | 2000 | 1 |


---

# Ajouter des données

## Notre table d'exemple

### directors

| id | name | country |
| -- | --- | ---- |
| 1 | Ridley Scott | USA |
| 2 | James Cameron | Canada |
| 3 | David Fincher | USA |
| 4 | Jean-Pierre Jeunet | France |

Si je veux ajouter une entrée à la table directors, je dois utiliser INSERT

```sql
INSERT INTO directors (name, country)
VALUES ("Céline Sciamma", "France")
```

| id | name | country |
| -- | --- | ---- |
| 1 | Ridley Scott | USA |
| 2 | James Cameron | Canada |
| 3 | David Fincher | USA |
| 4 | Jean-Pierre Jeunet | France |
| 5 | Céline Sciamma | France |

---

# Ajouter des données (suite)

Et si je veux ajouter plusieurs entrées :

```sql
INSERT INTO directors (name, country)
VALUES 
("Lana Wachowski", "USA"),
("Lilly Wachowsky", "USA")
```

| id | name | country |
| -- | --- | ---- |
| 1 | Ridley Scott | USA |
| 2 | James Cameron | Canada |
| 3 | David Fincher | USA |
| 4 | Jean-Pierre Jeunet | France |
| 5 | Céline Sciamma | France |
| 6 | Lana Wachowski | USA |
| 7 | Lilly Wachowsky | USA |


---

# Modifier des données

## Notre table d'exemple

### directors

| id | name | country |
| -- | --- | ---- |
| 1 | Ridley Scott | USA |
| 2 | James Cameron | Canada |
| 3 | David Fincher | USA |
| 4 | Jean-Pierre Jeunet | France |
| 5 | Céline Sciamma | France |
| 6 | Lana Wachowski | USA |
| 7 | Lilly Wachowsky | USA |


Une erreur s'est glissée dans la table. Lilly Wachowski qui est la soeur de Lana prend un i et pas un y à la fin de son nom de famille.

Nous allons corriger ceci avec un `UPDATE` :

```sql
UPDATE directors
SET name = "Lilly Wachowski"
WHERE directors.id = 7
```


| id | name | country |
| -- | --- | ---- |
| 1 | Ridley Scott | USA |
| 2 | James Cameron | Canada |
| 3 | David Fincher | USA |
| 4 | Jean-Pierre Jeunet | France |
| 5 | Céline Sciamma | France |
| 6 | Lana Wachowski | USA |
| 7 | Lilly Wachowski | USA |

---

# Modifier des données (suite)

Si vous voulez faire le même update sur plusieurs champs, c'est votre clause `WHERE` qui va devoir être plus générique. Attention ce pendant, plus elle est générale, plus vous risquez de faire des bêtises.

```sql
UPDATE directors
SET country = "États-Unis"
WHERE directors.country = "USA"
```

| id | name | country |
| -- | --- | ---- |
| 1 | Ridley Scott | États-Unis |
| 2 | James Cameron | Canada |
| 3 | David Fincher | États-Unis |
| 4 | Jean-Pierre Jeunet | France |
| 5 | Céline Sciamma | France |
| 6 | Lana Wachowski | États-Unis |
| 7 | Lilly Wachowski | États-Unis |


---

# Supprimer des données

## Notre table d'exemple

### movies

| id | title | year | director |
| -- | ----- | ----- | ----------- |
| 1 | Alien, le 8ème passager | 1979 | 1 |
| 2 | Aliens, le retour | 1986 | 2 |
| 3 | Aliens 3 | 1992 | 3 |
| 4 | Aliens, la résurrection | 1997 | 4 |
| 5 | Titanic | 1997 | 2 |
| 6 | Gladiator | 2000 | 1 |
| 7 | Le fabuleux destin d'Amélie Poulain | 2001 | 4 |


Si nous voulons supprimer une entrée, nous allons utiliser `DELETE` :

```sql
DELETE FROM movies
WHERE movies.id = 3
```

| id | title | year | director |
| -- | ----- | ----- | ----------- |
| 1 | Alien, le 8ème passager | 1979 | 1 |
| 2 | Aliens, le retour | 1986 | 2 |
| 4 | Aliens, la résurrection | 1997 | 4 |
| 5 | Titanic | 1997 | 2 |
| 6 | Gladiator | 2000 | 1 |
| 7 | Le fabuleux destin d'Amélie Poulain | 2001 | 4 |

Encore une fois il faudra se méfier de la clause `WHERE` si elle est trop générale, vous allez effacer plus d'entrées que ce que vous vouliez, et il n'y a pas de `Ctrl+Z` sur une base de données.

---

# Utiliser les relations entre les données

### movies

| id | title | year | director |
| -- | ----- | ----- | ----------- |
| 1 | Alien, le 8ème passager | 1979 | 1 |
| 2 | Aliens, le retour | 1986 | 2 |
| 3 | Aliens 3 | 1992 | 3 |
| 4 | Aliens, la résurrection | 1997 | 4 |
| 5 | Titanic | 1997 | 2 |
| 6 | Gladiator | 2000 | 1 |
| 7 | Le fabuleux destin d'Amélie Poulain | 2001 | 4 |

### directors

| id | name | country |
| -- | --- | ---- |
| 1 | Ridley Scott | USA |
| 2 | James Cameron | Canada |
| 3 | David Fincher | USA |
| 4 | Jean-Pierre Jeunet | France |


Nous avons donc deux tables dont la relation est établie entre les `directors` et les `movies`.

En effet, dans la table `movies`, la colonne `director` contient l'`id` du `director` correspondant.


Dans nos requêtes pour utiliser cette relation, nous allons joindre les tables en utilisant `JOIN`.

```sql
SELECT movies.title, directors.name 
FROM movies JOIN directors
ON movies.director = directors.id
```


| title | name |
| ----- | ---- |
| Alien, le 8ème passager | Ridley Scott |
| Aliens, le retour | James Cameron |
| Aliens 3 | David Fincher |
| Aliens, la résurrection | Jean-Pierre Jeunet |
| Titanic | James Cameron |
| Gladiator | Ridley Scott |
| Le fabuleux destin d'Amélie Poulain | Jean-Pierre Jeunet |

Vous pouvez utiliser ce que vous avec appris pour les `SELECT` avec des jointures. Par exemple, une clause `WHERE` :

```sql
SELECT movies.title, directors.name 
FROM movies JOIN directors
ON movies.director = directors.id
WHERE directors.id = 4
```

| title | name |
| ----- | ---- |
| Aliens, la résurrection | Jean-Pierre Jeunet |
| Le fabuleux destin d'Amélie Poulain | Jean-Pierre Jeunet |
