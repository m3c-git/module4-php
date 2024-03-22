
1) création de fichiers 
- assets
- controllers
- managers
- models
- services
- templates
--------------------------------------------------------------------------------

2) class 
a. créer dot.env 
b modifier composer.json

--------------------------------------------------------------------------------

3) Créez un fichier .gitgnore à la racine de votre projet et placez-y le contenu suivant : 

vendor/
.env
composer.lock

ensuite à la racine de votre projet faites les trois commandes suivantes :

git add .gitignore
git commit -m « adding gitignore file »
git push
--------------------------------------------------------------------------------

4)À la racine du dossier du projet, créez un fichier .env dans lequel vous mettrez vos 
informations de base de données avec le format suivant : 

# Database info
DB_NAME="databasename"
DB_USER="username"
DB_PASSWORD="password"
DB_CHARSET="utf8"
DB_HOST="db.3wa.io"

Pour l’instant nous n’utilisons pas de base de données donc laissez le fichier avec les 
informations d’exemple ci-dessus.

--------------------------------------------------------------------------------
5)À la racine du dossier de votre projet, créez un fichier index.php dans lequel 
vous mettrez le code suivant : 

<?php

// charge l'autoload de composer
require "vendor/autoload.php";

// charge le contenu du .env dans $_ENV
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

--------------------------------------------------------------------------------

6)Ensuite dans le dossier services vous allez créer un fichier Router.php.

Dans ce fichier vous allez créer une classe Router qui n’a qu’une seule méthode publique : handleRequest,
qui prend un array $get en paramètres et ne renvoie rien

--------------------------------------------------------------------------------
7)Faites la commande suivante dans votre terminal :

composer dump-autoload
pour obliger le projet à prendre en compte notre nouvelle classe Router.

Ensuite ajoutez le code suivant à la suite de votre fichier index.php : 

$router = new Router();
$router->handleRequest($_GET);
Ce code créée une instance de la classe Router et appelle sa méthode handleRequest en lui passant
le contenu de la superglobale $_GET

--------------------------------------------------------------------------------

8)Dans la méthode handleRequest de votre Router, créez une condition : 
si $get[« route »] existe faites un echo « Une route <br> »;
sinon faites une echo « La page d’accueil <br> »;

--------------------------------------------------------------------------------

9)Ensuite faites un run de votre index.php : cela devrait vous afficher 
« La page d’accueil » ajoutez ensuite ?route=truc à la fin de votre URL, cela devrait vous afficher « Une route ».

--------------------------------------------------------------------------------

10)Une fois que vous avez créé tous les echo dans les conditions de votre Router 
: testez les en runant votre index.php et en faisant varier l’URL.

--------------------------------------------------------------------------------

11)Dans votre dossier controllers, vous allez créer un fichier AbstractController.php, dans lequel vous allez 
créer une classe abstraite AbstractController dont voici le code : 

<?php

abstract class AbstractController
{
    protected function render(string $template, array $data) : void
    {
        require "templates/layout.phtml";
    }

    protected function redirect(string $route) : void
    {
        header("Location: $route");
    }

    protected function renderJSON(array $data) : void
    {
        echo json_encode($data);
    }
}

Une fois que vous avez sauvegardé votre fichier faites la commande suivante dans le terminal, à la racine du projet :

composer dump-autoload

--------------------------------------------------------------------------------

12)Vous allez ensuite vous appuyer sur les controllers et méthodes que vous avez imaginé dans votre router 
pour créer tous vos controllers (qui doivent tous hériter d’AbstractController) et leurs méthodes.

Les méthode sont publiques et ne renvoient rien.

--------------------------------------------------------------------------------

13)Une fois que vos controllers et méthodes sont en place, instanciez-les et appelez-les dans votre routeur. 

Déplacez les echo que vous aviez dans votre routeur dans les méthodes et refaites vos tests pour vérifier que tout fonctionne.

--------------------------------------------------------------------------------


Il ne vous reste plus ensuite qu’à créer vos templates.

Commencez par créer un fichier layout.phtml dans votre dossier templates et mettez-y le code suivant : 

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            require "templates/$template.phtml";
        ?>
    </body>
</html>

Créez ensuite les templates de vos pages que vous appelerez dans chaque méthode controller.

Par exemple si mon fichier template est dans le fichier templates/tech/index.phtml j'aurais le code suivant dans mon controller :

$this->render("tech/index", []);