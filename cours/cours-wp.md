---
theme: theme.json
author: Gaellan
date: Feb 6, 2024
paging: Page %d sur %d
---

# Introduction à WordPress

## C'est quoi WordPress ?

## Créer un thème custom pour WordPress

## Quelques extensions à installer

## Projet : création d'un site WordPress avec un thème sur-mesure

---

# Introduction à WordPress : c'est quoi WordPress ?

WordPress est le CMS (Content Management Software) le plus répandu du marché. Il est codé en PHP Orienté Objet.

WordPress était à l'origine conçu pour créer des blogs et cela se voit encore dans la structure de certaines données mais les évolutions et les contributions de la communauté l'ont emmené bien plus loin que ça.

WordPress a un core, le code source de base et les développements que l'on peut faire sont sur deux axes : les thèmes concernent ce qui s'affichera (ou non) à vos utilisateurs, les extensions, elles, permettent d'ajouter des comportements.

## Les CMS

Un CMS c'est un logiciel qui permet de simplifier la création la gestion et la maintenance d'un site internet. Il en existe un paquet certains connus : WordPress, Prestashop, Shopify, certains plus techniques, voire complètement internes à certaines entreprises.

Nous allons utiliser WordPress parce que c'est le plus généraliste, le plus répandu et le mieux documenté.

## Les thèmes

Le développement de thème WordPress c'est ce que nous allons voir ensemble car cela nous permet de voir en même temps la configuration et la gestion d'un site WordPress. Sur WordPress, en règle générale on saisit des contenus et on configure un thème.

Deux principales exceptions cependant : lorsque vous manipulez du e-commerce (là vous faites beaucoup de configuration de l'extension WooCommerce) et lorsque vous vous occupez du SEO (vous manipulez des contenus mais en fonction des retours d'une extension).

## Les extensions

Les extensions elles permettent d'affiner ou ajouter des comportements, mais le développement d'extension est plus long et plus technique que celui de thèmes donc pendant cette journée nous allons utiliser des extensions mais nous n'allons pas en coder.

---

# Introduction à WordPress : le développement de thèmes

Coder un thème custom WordPress demande de connaitre le PHP, de savoir lire une doc (https://developer.wordpress.org/themes/) et de comprendre quelques principes de base sur le fonctionnement de WordPress.

## style.css

Le `style.css` de votre thème contient sa carte d'identité, nom du thème, auteur, version, etc etc, c'est le seul fichier CSS qui doit être inclus directement et tout le style doit être regroupé à l'intérieur (ça tombe bien vous savez faire ça).

## Hiérarchie des templates

Les thèmes WordPress fonctionnent grâce à un système de template (des fichiers .php avec des noms précis) du plus spécialisé au plus générique. WordPress appliquera toujours à une page, le template le plus spécialisé pour sa situation.

Il en existe beaucoup, en voici quelques-uns :

- `front-page.php` le template de la page d'accueil
- `page.php` le template par défaut des pages
- `index.php` le template par défaut si aucun autre n'est présent
- `single.php` le template par défaut pour un article de blog
- `category.php` le template de la page d'une catégorie
- ...

## functions.php

Votre thème aura parfois besoin de logique, pour affiner vos requêtes ou formatter des données, tout votre code logique devra être écrit ici (vous ne voyez pas mais ce fichier est `require` et donc toujours disponible).

---

# Introduction à WordPress : quelques extensions de base

Les extensions de base qui simplifient la vie de développeur WordPress :

## Yoast SEO

L'extension de référence pour la gestion du référencement.

## Advanced Custom Fields

Une extension qui permet d'améliorer grandement la saisie des contenus quand on veut faire des interfaces plus complexes.

## CPT UI

Une extension qui permet de créer des nouveaux types de posts et les sous-menu qui vont avec (utilisée avec Advanced Custom Fields elle fait de la magie).

---

# Introduction à WordPress : projet de site custom

Les consignes sont dans le fichier `consignes-wp.md` sur Discord.