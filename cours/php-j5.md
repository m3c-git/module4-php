---
theme: theme.json
author: Gaellan
date: Jan 16, 2024
paging: Page %d sur %d
---

# Initiation au PHP

## Plan du cours

### PDO

### Executer une requête

### Se protéger des injections

---

# PDO

Le cours à propos de PDO sur Moodle : https://elearning.3wa.fr/mod/page/view.php?id=12274

PDO c'est ce qui va vous permettre de dialoguer avec votre base de données dans votre code PHP.

## Instancier la classe PDO

```php

$host = "db.3wa.io";
$port = "3306";
$dbname = "prenomnom_phpj5";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "votre_username";
$password = "votre_password";

$db = new PDO(
    $connexionString,
    $user,
    $password
);
```

---

# Exécuter une requête

## Récupérer le résultat d'un SELECT

### fetch

```php
if (isset($_GET['id'])) {
	$query = $db->prepare('SELECT * FROM movies WHERE id = :id');
	$parameters = [
    'id' => $_GET['id']
	];
	$query->execute($parameters);
	$movie = $query->fetch(PDO::FETCH_ASSOC);
}

```

Si vous n'avez qu'une seule entrée à récupérer, utilisez `fetch`.

### fetchAll

```php
$query = $db->prepare('SELECT * FROM movies LIMIT 10');
$query->execute();
$movies = $query->fetchAll(PDO::FETCH_ASSOC);
```

Si vous en avez plusieurs, utilisez `fetchAll`.

---

# Se protéger des injections

N'utilisez jamais directement quelque chose transmis par un utilisateur. Jamais. C'est une énorme faille de sécurité, probablement l'une des pires.

⛔️ Vraiment ne faites jamais ça. ⛔️

On utilise donc les paramètres et la préparation de requête. En faisant ça, PDO va se charger de nettoyer les données de ce qui pourrait y être nuisible.

Vous avez un exemple dans la démonstration de fetch, mais je le remets au cas où c'est important : 

```php
if (isset($_GET['id'])) {
	// je mets une placeholder dans la requête avec :
	$query = $db->prepare('SELECT * FROM movies WHERE id = :id');

	// je prépare ma requête avec les paramètres
	$parameters = [
    'id' => $_GET['id']
	];

	// PDO va cleaner les paramètres puis exécuter la requête
	$query->execute($parameters);
	
	$movie = $query->fetch(PDO::FETCH_ASSOC);
}

```
