Créer un repo Git pour l'atelier

Ensuite faites la mise en place du projet (la seule librairie dont vous avez besoin c'est dotEnv) avec vos différents dossiers, votre index.php et votre .env.

--------------------------------------------------------------------------


Ensuite vous allez devoir mettre en place un routeur qui gère les routes suivantes :

- login
- check-login
- register
- check-register

Pour l'instant, pas de controllers, pas de managers, ou autres, simplement le routeur que vous instanciez et appelez dans votre index.php

Ensuite créez les controllers listés dans votre routeur ainsi que leurs méthodes. N'oubliez pas que vos controllers doivent hériter d'un AbstractController.

--------------------------------------------------------------------------


Vous allez ensuite créer un modèle User.

Les attributs d'un user : 

- un id qui peut être null (et est null par défaut)
- un username
- un email
- un password

Votre modèle a évidemment un constructeur. Il a également des getters et setters pour tous les attributs.

--------------------------------------------------------------------------


Vous allez ensuite créer une base de données pour le projet où vous allez créer la table users avec les bonnes colonnes pour correspondre à votre modèle.

N'oubliez pas de saisir les informations de connexion à votre base de données dans votre .env.

--------------------------------------------------------------------------

Vous allez ensuite créer un AbstractManager avec le code suivant : 

abstract class AbstractManager
{
protected PDO $db;

    public function __construct()
    {
        $connexion = "mysql:host=".$_ENV["DB_HOST"].";port=3306;charset=".$_ENV["DB_CHARSET"].";dbname=".$_ENV["DB_NAME"];
        $this->db = new PDO(
            $connexion,
            $_ENV["DB_USER"],
            $_ENV["DB_PASSWORD"]
        );
    }
}

--------------------------------------------------------------------------


Puis vous allez créer un UserManager qui hérite d'AbstractManager et contient les méthodes suivantes :

public function findByEmail(string $email) : ? User

qui retourne une classe User qui représente le User de la database qui a l'email passé en paramètres ou null s'il n'existe pas.

public function createUser(User $user) : User

qui créé le user passé en paramètres dans la base de données et le retourne avec l'id que lui a attribué la base de données

--------------------------------------------------------------------------

Pour tester votre UserManager, nous allons mettre dans votre méthode register :

Une instanciation d'un UserManager.
Une instanciation d'un User $test avec les infos suivantes :

username : test
email : test@test.fr
password : test

Appelez ensuite la méthode createUser de votre UserManager en lui passant $test. Vérifiez bien si ce nouvel utilisateur est inscrit dans votre base de données.

N'oubliez pas d'appeler la route en modifiant votre url dans le navigateur.

Une fois que votre création d'utilisateur fonctionne, vous allez mettre dans votre méthode login :

Instanciation d'un UserManager.
Appelez la méthode findByEmail de votre manager en lui passant "test@test.fr"
Faites un var_dump du résultat.

N'oubliez pas d'appeler la route en modifiant votre url dans le navigateur.

--------------------------------------------------------------------------

Nous allons commencer par créer un template de layout : layout.phtml avec le code suivant :

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Atelier authentification</title>
    </head>
    <body>
        <?php
            require "templates/$template.phtml";
        ?>
    </body>
</html>
Puis nous allons créer deux templates :

register.phtml qui contient un formulaire de création d'un utilisateur, l'action du formulaire est la route check-register, sa méthode est post

Attention à la création de compte, l'utilisateur doit confirmer son mot de passe.

login.phtml qui contient un formulaire de connexion, l'action du formulaire est la méthode check-login, sa méthode est post

Votre méthode register, dans laquelle vous pouvez effacer votre test, fera un render du template register.phtml.

Votre méthode login, dans laquelle vous pouvez effacer votre test, fera un render du template login.phtml.

-----------------------------------------------------------------------------------------------------

Dans votre méthode check-register : récupérez dans $_POST les informations transmises par le formulaire.

Utilisez-les pour instancier un User $user.

Instanciez un UserManager.

Utilisez la méthode findByEmail pour vérifier si l'utilisateur existe déjà. S'il n'existe pas, utilisez la méthode createUser pour le créer. S'il existe, faites simplement un echo "L'utilisateur existe déjà<br>".

Maintenant que nous avons la base il faut rajouter une dose de sécurité : nous allons chiffrer notre mot de passe. Pour ce faire, nous allons utiliser la méthode password_hash fournie par php : 

$safePassword = password_hash($unsafePassword, PASSWORD_BCRYPT)

Une fois que votre mot de passe est sécurisé, utilisez-le pour instancier votre User.

-------------------------------------------------------------------------------------------------------

Dans votre méthode login, récupérez dans $_POST les valeurs transmises par le formulaire.

Instanciez un UserManager et appelez la méthode findByEmail pour vérifier que l'utilisateur existe bien. S'il existe, nous allons ensuite vérifier son mot de passe.

Pour vérifier un mot de passe nous allons utiliser la méthode password_verify fournie par php :

password_verify($passwordduFormulaire, $passwordDeLaBDD) si elle renvoie true, le mot de passe est le bon.

Si l'utilisateur n'existe pas ou que le mot de passe n'est pas le bon, faits un echo "Identifiants incorrects<br>".

------------------------------------------------------------------------------------------------------------

Dans votre index.php, en haut du fichier, démarrez votre session : session_start();

Dans votre méthode register, lorsque vous créez votre utilisateur, sauvegardez son id dans la session :

$_SESSION["user"] = $user->getId();

Dans votre méthode login, si les indentifiants sont les bons, connectez votre utilisateur :

$_SESSION["user"] = $user->getId();