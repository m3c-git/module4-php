# Mini-projet de soutien : Ze Blog V2

## Étape 0 : le repo Git

- Créez un repository public avec un README sur GitHub, appelez-le `bre01-php-j6`
- Clonez le dans le dossier `sites/php` de votre IDE.
- Créez un dossier `blog` dans votre dossier `bre01-php-j6`.


## Étape 1 : Récupérer les sources

Sur Discord, dans le canal de soutien, vous devrez récupérer le fichier .zip qui contient les sources du projet Ze Blog V1.


## Étape 2 : Créer la base de données pour les Posts de Ze Blog

Vous devrez créer une base de données, puis une table `posts` pour stocker les informations concernant les posts (initialement contenues dans posts.php).

## Étape 3 : Créer la table les Catégories de Posts de Ze Blog

Vous devrez créer une seconde table `categories` pour stocker les informations concernant les catégories (également contenues dans posts.php).


## Étape 4 : Créer une liaison entre les Posts et leur Catégorie

Ajoutez à la table `posts` un champ qui contient l'identifiant de sa catégorie correspondante (issu de la table `categories`).


## Étape 5 : Établir la connexion à votre base de données

Créez un fichier `config/connexion.php` pour initialiser la connexion à votre base de données via PDO et ajoutez le require correspondant dans `index.php`.


## Étape 6 : Dynamiser les articles

Dans votre fichier `article.phtml`, utilisez les données contenues dans votre base de données pour ne plus avoir à utiliser les données issues de la variable `$posts` initialement présente.


## Étape 7 : Dynamiser la liste de liens vers les catégories

Dans le fichier `header.phtml`, faites en sorte que les liens vers les différentes catégories soient dynamisés via des informations issues de votre base de données.


## Étape 8 : Dynamiser la page catégories

Même principe que l'étape 6, remplacez toutes les données issues de `$posts` par des données récupérées via votre base de données.


## Étape 9 : Dynamiser la page home

Dans le fichier `home.phtml`, faites en sorte que les données issues de `$posts` soient remplacées par des données récupérées via votre base de données.


## Étape 10 : "Ça fonctionne rarement du premier coup"

Supprimez le fichier `posts.php` et assurez-vous du bon fonctionnement de cette V2 du Ze Blog.


## Étape Bonus : Administration des contenus

Dans des fichiers préfixés admin-NOMDUFICHIER.phtml, créez des pages d'administration pour créer, consulter, éditer, supprimer les Posts et Catégories de votre Blog."