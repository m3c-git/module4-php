# Exercices authentification

=> utiliser la base du J5 avec les users

## Exercice 1 : chiffrer un mot de passe

Créer un fichier `hash_password.php` pour chiffrer un mot de passe, chiffrez ceux de vos utilisateurs de la base de données.

Ensuite utilisez PhpMyAdmin pour modifier les mots de passes de la base et stocker leurs versions chiffrées à la place.


## Exercice 2 : Tester les sessions

Créez deux pages : une page avec un formulaire de connexion, une avec un titre `<h1>` qui dit "Vous êtes connecté-e".

Si vous avez un utilisateur stocké dans la session, affichez le page avec le titre sinon, affichez le formulaire de connexion.

Faites varier les infos de la session directement dans le code pour vérifier si cela fonctionne.


## Exercice 3 : formulaire de connexion

Créer un formulaire de connexion, lorsqu'il est soumis, vérifiez si un utilisateur avec cet email existe en base de données.

Si oui, comparez le mot de passe du formulaire et celui de la base de données. Si c'est bon, stockez le nom et prénom de votre utilisateur dans la session.



