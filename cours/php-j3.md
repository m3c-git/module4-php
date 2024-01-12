---
theme: theme.json
author: Gaellan
date: Jan 12, 2024
paging: Page %d sur %d
---

# Introduction au PHP

## Plan du cours

### Le principe de la base de données

### Les tables

### Les colonnes

### Les relations

### Exemple : les données d'un blog

### Exemple : les données d'un menu de restaurant

### Exercice pratique : programme d'un cinéma

### Pour aller plus loin

---

# La représentation des données

## Tableau basique

| Titre | Année | Réalisateur |
| ----  | ----- | ----------- |
| Alien, le 8ème passager | 1979 | Ridley Scott |
| Aliens, le retour | 1986 | James Cameron |
| Aliens 3 | 1992 | David Fincher |
| Alien, la résurrection | 1997 | Jean-Pierre Jeunet |
| Titanic | 1997 | James Cameron |
| Gladiator | 2000 | Ridley Scott |

Ici nous avons un tableau très simple, chaque ligne représente un film et chaque colonne une information sur le film.

## Tableau avec identifiant unique


| ID | Titre | Année | Réalisateur |
| -- | ----- | ----- | ----------- |
| 1 | Alien, le 8ème passager | 1979 | Ridley Scott |
| 2 | Aliens, le retour | 1986 | James Cameron |
| 3 | Aliens 3 | 1992 | David Fincher |
| 4 | Aliens, la résurrection | 1997 | Jean-Pierre Jeunet |
| 5 | Titanic | 1997 | James Cameron |
| 6 | Gladiator | 2000 | Ridley Scott |

On ajoute un identifiant unique à chaque film et sa valeur augmente pour chacun des films.

Si j'ajoute un film au tableau :


| ID | Titre | Année | Réalisateur |
| -- | ----- | ----- | ----------- |
| 1 | Alien, le 8ème passager | 1979 | Ridley Scott |
| 2 | Aliens, le retour | 1986 | James Cameron |
| 3 | Aliens 3 | 1992 | David Fincher |
| 4 | Aliens, la résurrection | 1997 | Jean-Pierre Jeunet |
| 5 | Titanic | 1997 | James Cameron |
| 6 | Gladiator | 2000 | Ridley Scott |
| 7 | Le fabuleux destin d'Amélie Poulain | 2001 | Jean-Pierre Jeunet |

Le nouvel identifiant vaudra 1 de plus que le dernier du tableau.

---

# La représentation des données

## Plusieurs tableaux

Je veux préciser des informations sur les réalisateurs. Plutôt que de me répéter dans mon tableau je vais en créer un autre qui concerne uniquement les réalisateurs.

### Films


| ID | Titre | Année | Réalisateur |
| -- | ----- | ----- | ----------- |
| 1 | Alien, le 8ème passager | 1979 | Ridley Scott |
| 2 | Aliens, le retour | 1986 | James Cameron |
| 3 | Aliens 3 | 1992 | David Fincher |
| 4 | Aliens, la résurrection | 1997 | Jean-Pierre Jeunet |
| 5 | Titanic | 1997 | James Cameron |
| 6 | Gladiator | 2000 | Ridley Scott |
| 7 | Le fabuleux destin d'Amélie Poulain | 2001 | Jean-Pierre Jeunet |


### Réalisateurs


| ID | Nom | Pays |
| -- | --- | ---- |
| 1 | Ridley Scott | USA |
| 2 | James Cameron | Canada |
| 3 | David Fincher | USA |
| 4 | Jean-Pierre Jeunet | France |

---

# La représentation des données

## Les relations entre les données

Maintenant que nous avons deux tableaux avec des identifiants uniques, nous allons pouvoir utiliser ces identifiants pour créer des relations entre nos tableaux :

### Films


| ID | Titre | Année | Réalisateur |
| -- | ----- | ----- | ----------- |
| 1 | Alien, le 8ème passager | 1979 | 1 |
| 2 | Aliens, le retour | 1986 | 2 |
| 3 | Aliens 3 | 1992 | 3 |
| 4 | Aliens, la résurrection | 1997 | 4 |
| 5 | Titanic | 1997 | 2 |
| 6 | Gladiator | 2000 | 1 |
| 7 | Le fabuleux destin d'Amélie Poulain | 2001 | 4 |


### Réalisateurs


| ID | Nom | Pays |
| -- | --- | ---- |
| 1 | Ridley Scott | USA |
| 2 | James Cameron | Canada |
| 3 | David Fincher | USA |
| 4 | Jean-Pierre Jeunet | France |


Une base de données c'est donc ça : une série de tableaux, qu'on appelle tables, et les relations qui les lient.

---

# Exemple de représentation des données : un Blog

## Qu'y-a-t'il dans un blog ?

La première question à se poser c'est : "qu'est-ce qu'il y a dans mon site comme informations ?". 

Un blog dans sa version la plus simple : des articles, classés par catégories.

Nous avons donc des articles et des catégories.

## Il y a quoi ans un article ?

On peut imaginer qu'à minima un article a un titre, une date de publication et un contenu. Puisqu'on a des catégories, on considère qu'un article a aussi une catégorie.

## Il y a quoi dans une catégorie

Au minimum, un catégorie a un nom, et une description.

### Articles

| ID | Titre | Contenu | Date | Catégorie |
| -- | ----- | ----- | ----------- | ----------- |
| 1 | Le titre de l'article 1 | Le contenu de l'article 1| 01-01-2011 | 1 |
| 2 | Le titre de l'article 2 | Le contenu de l'article 2| 02-02-2013 | 2 |
| 3 | Le titre de l'article 3 | Le contenu de l'article 3| 03-03-2017 | 1 |
| 4 | Le titre de l'article 4 | Le contenu de l'article 4| 01-01-2021 | 3 |

### Catégories

| ID | Nom | Description |
| -- | --- | ----------- |
| 1 | News | Description de la catégorie news |
| 2 | Dev | Description de la catégorie dev |
| 3 | Design | Description de la catégorie design |

---

# Exemple de représentation des données : le menu d'un restaurant

Pour les besoin de l'exercice, notre restaurant a un menu très réduit. Il ne sert que des plats de résistance, chacun ayant un nom et constitué d'une protéine et deux deux légumes. Les plats peuvent être végétariens ou non et chacun d'entre eux a un prix.

---

# Une solution possible

## Plats

| ID | Nom | Protéine | Légume | Légume 2 | Végétarien | Prix |
| -- | --- | -------- | ------ | -------- | ---------- | ---- |
| 1  | Streak frites | Boeuf | Pommes de terre | Haricot | Non | 12 |
| 2  | Printemps - Été | Tofu soyeux | Courgette | Tomate | Oui | 10 |
| 3  | Tartiflette | Lardons | Pomme de terre | Oignon | Non | 11 |


Si je veux faire quelque chose d'un peu plus élaboré je peux dire que chaque plat a en plus un type (entrée, plat , dessert) et est composé de 3 ingrédients plutôt que d'une protéine et deux légumes.

---

# Une solution possible

## Plats

| ID | Nom | Ingrédient 1 | Ingédient 2 | Ingrédient 3 | Prix | Type |
| -- | --- | -------- | ------ | -------- | ---- | ---- |
| 1  | Streak frites | 1 | 2 | 3 | 12 | Plat |
| 2  | Printemps - Été | 4 | 5 | 6 | 10 | Entrée |
| 3  | Tartiflette | 7 | 2 | 8 | 11 | Plat |

## Ingrédients

| ID | Nom | Végétarien |
| -- | --- | ---------- |
| 1  | Boeuf | Non |
| 2  | Pommes de terre | Oui |
| 3  | Haricots | Oui |
| 4  | Tofu soyeux | Oui |
| 5  | Courgette | Oui |
| 6  | Tomate | Oui |
| 7  | Lardons | Non |
| 8  | Oignons | Oui |   
---

# Exercice pratique : le programme d'un cinéma

Maintenant c'est à votre tour d'essayer. Un cinéma dispose de plusieurs salles. Chaque salle a une capacité (nombre de sièges disponibles) et diffuse un film.

Chaque film a un titre, un réalisateur (ou une réalisatrice), et une durée.

Essayez de créer les tables sous formes de tableaux pour représenter ces données. Si vous voulez créer des tables en Markdown, voici le lien d'un outil très utile : https://www.tablesgenerator.com/markdown_tables.

---

# Pour aller encore plus loin

## Les relations a plus de deux tables

Si nous restons dans l'idée d'un cinéma, maintenant nous aimerions pouvoir stocker des séances. Une séance a une salle, un film et un horaire de début.

### Films

| ID | Titre | Réalisation | Durée |
| -- | ----- | ----------- | ----- |
|  1 | Titanic | James Cameron | 200 |
|  2 | Ten | Abbas Kiarostami | 124 |
|  3 | Portait d'une jeune fille en feu | Céline Sciamma | 115 |

### Salles

| ID | Nom | Capacité |
| -- | --- | -------- |
|  1 | Blockbuster | 300 |
|  2 | Indé | 180 |

### Séances

| ID | Salle | Film | Horaire |
| -- | ----- | ---- | ------- |
|  1 | 1 | 1 | 18:00 |
|  2 | 2 | 2 | 20:00 |
|  3 | 2 | 3 | 22:30 |
