# Exercices sur les boucles et les tableaux en PHP

N'oubliez pas que pour écrire du PHP dans un fichier il faut mettre les balises PHP :

```php
<?php

// votre code

?>
```

## Exercice 0

- Créez un dossier `boucles-et-tableaux` dans le dossier `bre01-php-j1`


## Exercice 1 : Tableau simple

Dans un fichier `exercice-1.php`.

```php
$animals = ["Chat", "Chien", "Lapin", "Souris"];
```

Parcourez le tableau `$animals` et affichez chacun des animaux en sautant une ligne entre chaque.

Pour sauter une ligne faites un `echo "<br>";`.

### N'oubliez pas de sauvegarder votre travail

```sh
git add exercice-1.php
git commit -m "exercice 1 boucles et tableaux"
git push
```


## Exercice 2 : Tableau et condition

Dans un fichier `exercice-2.php`.

```php
$numbers = [28, 32, 44, -67, 18, 24, -98];
```

Parcourez le tableau numbers et affichez les nombres négatifs, en sautant une ligne entre chaque. 

Pour sauter une ligne faites un `echo "<br>";`.

### N'oubliez pas de sauvegarder votre travail

```sh
git add exercice-2.php
git commit -m "exercice 2 boucles et tableaux"
git push
```


## Exercice 3 : Tableau associatif

Dans un fichier `exercice-3.php`.

```php
$user = [
	"firstName" => "Barack",
	"lastName" => "Obama"
];
```

Utilisez l'injection de variable et le tableau associatif `$user` pour afficher une phrase qui dit `Je suis Barack Obama, le 44ème président des USA.`.

### N'oubliez pas de sauvegarder votre travail

```sh
git add exercice-3.php
git commit -m "exercice 3 boucles et tableaux"
git push
```


## Exercice 4 : Tableaux imbriqués

Dans un fichier `exercice-4.php`.

```php
$users = [
	[
		"firstName" => "Mari",
		"lastName" => "Doucet"
	],
	[
		"firstName" => "Hugues",
		"lastName" => "Froger"
	]
];
```

Parcourez le tableau `users` et affichez le nom et prénom de chacun des utilisateurs en sautant une ligne entre chaque utilisateur.

Pour sauter une ligne faites un `echo "<br>";`.

### N'oubliez pas de sauvegarder votre travail

```sh
git add exercice-4.php
git commit -m "exercice 4 boucles et tableaux"
git push
```