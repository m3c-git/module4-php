# Mini-projet PDO

## Étape 0 : Préparation

- Créez un repository public avec un README sur GitHub, appelez-le `bre01-php-j5`
- Clonez le dans le dossier `sites/php` de votre IDE.
- Créez un dossier `pdo` dans votre dossier `bre01-php-j5`.

- Dans PhpMyAdmin créez une base de données `prenomnom_phpj5`
- Dans cette base créez une table `users` avec les colonnes suivantes :
	- id : int, autoincrémenté
	- email : varchar 255
	- password : varchar 255
	- first_name : varchar 255
	- last_name : varchar 255


## Étape 1 : récupérez les fichiers du projet

Vous trouverez les fichiers avec les intégrations dans un zip `exercice-pdo.zipexercice-pdo.` sur Discord.

Familiarisez-vous avec les différents fichiers et le code qui vous est fourni dedans.


## Étape 2 : initialisez votre connexion

Dans le fichier `config/connexion.php` précisez les bonnes infos pour votre projet : votre nom d'utilisateur, votre mot de passe et le nom de votre base de données.

Dans le fichier `index.php`, décommentez la ligne `//require "config/connexion.php";`.


## Étape 3 : rajoutez des données depuis PhpMyAdmin

Utilisez PhpMyAdmin pour ajouter 3 utilisateurs à votre base de données.


## Étape 4 : la liste des utilisateurs

## Étape 4.1 : récupérer les utilisaturs depuis la base de données

En haut du fichier `list-users.phtml` avant le code HTML utilisez PDO pour récupérer tous les utilisateurs présents dans votre base.

## Étape 4.2 : Dynamisez la table

Affichez ensuite la liste des utilisateurs dans le tableau HTML en dessous, un utilisateur par ligne. N'oubliez pas de recréer les boutons d'actions à chaque ligne.

## Étape 4.3 : Dynamisez les actions

Modifiez les href des boutons d'actions :

- le bleu doit appeler `index.php?route=show-user&id=id-de-votre-user` en remplaçant bien l'id du user.
- le vert doit appeler `index.php?route=edit-user&id=id-de-votre-user` en remplaçant bien l'id du user.
- le rouge doit appeler `logic/delete-user.php?id=is-de-votre-user` en remplaçant bien l'id du user.


## Étape 5 : dynamiser le show-user

En haut du fichier `show-user.phtml`, avant le code HTML, faites en sorte de récupérer l'id de l'utilisateur dans les paramètres GET. Utilisez ensuite cet `id` pour récupérer les informations de cet utilisateur précis dans la base de données.

Dynamisez ensuite le HTML avec les informations de l'utilisateur.


## Étape 6 : dynamiser le create-user

Dans le fichier `create-user.phtml` faites en sorte que l'action du formulaire soit `logic/create-user.php` et qu'il utilise la méthode POST.

Dans le fichier `logic/create-user.php`, utilisez les informations du formulaire et PDO pour envoyer une requête qui permet d'ajouter l'utilisateur du formulaire à votre base de données.


## Étape 7 : dynamisez le edit-user

Dans le fichier `edit-user.phtml` faites en sorte que l'action du formulaire soit `logic/edit-user.php` et qu'il utilise la méthode POST.

En haut du fichier `edit-user.phtml`, avant le code HTML, faites en sorte de récupérer l'id de l'utilisateur dans les paramètres GET. Utilisez ensuite cet `id` pour récupérer les informations de cet utilisateur précis dans la base de données.

Pré-remplissez le formulaire avec les informations de l'utilisateur.

Dans le fichier `logic/edit-user.php`, utilisez les informations du formulaire et PDO pour envoyer une requête qui permet de modifier l'utilisateur du formulaire dans votre base de données.


## Étape 8 : dynamisez le delete-user

Dans le fichier `logic/delete-user.php`, utilisez l'id récupéré en paramètres GET et un appel à PDO pour effacer l'utilisateur de votre base de données.


## Étape 9 : bonus

Si vous avez besoin de rediriger avec avoir fait des action (pour ramener à la liste des utilisateur par exemple), regardez la documentation suivante : https://www.php.net/manual/en/function.header.php
 