# Utilisation du .env dans une application PHP

## Plan du cours

### Définition et Usage

### Exemples de variables d'environnement

### Avantages Clés

### Utilisation de la librairie PHP Dotenv

#### Création du fichier .env

#### Installer PHP Dotenv via Composer

#### Exemple d'utilisation dans PHP

### Bonnes Pratiques

---

## Définition et Usage

Un fichier ``.env`` (abréviation de "environment") est un fichier texte utilisé dans les projets de développement logiciel pour stocker des variables d'environnement. Ces variables sont des paramètres externes au code source qui peuvent influencer le comportement et la configuration de l'application.


## Exemples de variables d'environnement

#### Informations de Connexion à une Base de Données

```.env
DB_HOST=localhost
DB_USER=root
DB_PASS=password123
DB_NAME=mydatabase
```

#### Clés d'API
```.env
API_KEY=abc123xyz789
```

#### Configuration du Serveur
```.env
PORT=3000
NODE_ENV=development
```

#### Autres Paramètres Configurables
```.env
LOG_LEVEL=verbose
FEATURE_FLAG_NEW_FEATURE=true
```

## Avantages Clés

**Sécurité :** Le fichier .env permet de stocker des informations sensibles telles que les mots de passe, les clés API, et autres données confidentielles, les gardant ainsi à l'écart du code source. Cela est crucial pour la sécurité, surtout pour éviter l'exposition accidentelle de données sensibles lors du partage ou de la publication du code.

**Flexibilité et Adaptabilité :** Les variables d'environnement permettent aux développeurs de modifier le comportement de l'application sans changer le code source. Par exemple, on peut avoir des configurations différentes pour les environnements de développement, de test et de production.

**Maintenabilité et Clarté :** En séparant la configuration du code, les fichiers ``.env`` contribuent à une architecture plus propre et plus maintenable, facilitant la gestion des paramètres qui peuvent changer selon les environnements.

## Utilisation de la librairie PHP Dotenv

### Création du fichier .env
Pour intégrer un fichier .env dans un projet il faut :
 - **Créer un fichier** nommé  ``.env`` à la racine du projet.
 - **Définir des variables** sous la forme ``NOM_VARIABLE=valeur``.

Exemple d'un fichier ``.env``
```.env
DB_HOST=localhost
PORT=3000
API_KEY=abc123xyz789
```

Une fois le fichier existant nous allons voir comment utiliser la librairie Dotenv pour avoir accès aux variables définie dans ``.env`` dans votre code PHP.

### Installer PHP Dotenv via Composer

Composer est un outil de gestion des dépendances : il permet de récupérer/installer des versions précises de biliothèques extérieures à votre projet et tout composant nécessaire à leur bon fonctionnement.

Dans notre cas voici la commande à écrire dans votre terminal à la racine d'un projet pour récupérer la librairie PHP de Dotenv

```shell
composer require vlucas/phpdotenv
```
Vous trouverez ainsi tous les composants nécessaire au fonctionnement de la librairie PHP Dotenv dans un dossier ./vendor.

### Exemple d'utilisation dans PHP
Utiliser une bibliothèque spécifique comme Dotenv pour PHP va permettre de lire le contenu du fichier .env et d'en charger ses variables dans votre application PHP de manière globale.

Exemple :
```php
// Exemple d'utilisation des variables d'environnement dans le contexte d'une connexion à une base de données

require_once __DIR__ . '/vendor/autoload.php';

// Chargement des variables d'environnement
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Utilisation des variables d'environnement
$dbHost = $_ENV['DB_HOST'];
$dbUser = $_ENV['DB_USER'];
$dbPass = $_ENV['DB_PASS'];
$dbName = $_ENV['DB_NAME'];

// Connexion à la base de données
try {
$conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
// Définir le mode d'erreur PDO à exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connexion réussie";
} catch(PDOException $e) {
echo "Erreur de connexion : " . $e->getMessage();
}
```

Documentation complète de PHP Dotenv : https://github.com/vlucas/phpdotenv

## Bonnes Pratiques

**Ne jamais versionner le fichier ``.env``**  : Pour des raisons de sécurité, il est crucial de ne pas inclure le fichier ``.env`` dans les systèmes de contrôle de version (comme Git), surtout si le projet est hébergé sur des dépôts publics. Pour cela, il doit être mentionné dans le fichier ``.gitignore``.

**Utiliser des fichiers ``.env`` distincts pour différents environnements :** Il est recommandé d'avoir des fichiers ``.env`` séparés pour les environnements de développement, de test et de production, contenant des variables appropriées à chaque contexte