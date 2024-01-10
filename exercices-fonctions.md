# Exercices sur les fonctions en PHP

N'oubliez pas que pour écrire du PHP dans un fichier il faut mettre les balises PHP :

```php
<?php

// votre code

?>
```

## Exercice 0

- Créez un dossier `fonctions` dans le dossier `bre01-php-j1`


## Exercice 1

Dans un fichier `exercice-1.php`.

Vous allez devoir créér une fonction appellée `concat`, elle prend deux `string` en paramètres et renvoie une `string`.

Cette fonction concatène les deux strings qu'elle prend en paramètre en renvoie le résultat.

### Tester votre fonction

```php
echo concat("Hello ", "World !<br>"); // doit afficher Hello World! et revenir à la ligne
echo concat("À la ", "claire fontaine<br>"); // doit afficher À la claire fontaine et revenir à la ligne
echo concat("La vie, l'univers ", "et tout le reste<br>"); // doit afficher La vie, l'univers et tout le reste et revenir à la ligne
```

### N'oubliez pas de sauvegarder votre travail

```sh
git add exercice-1.php
git commit -m "exercice 1 fonctions"
git push
```


## Exercice 2

Dans un fichier `exercice-2.php`.

Vous allez devoir créér une fonction appellée `average`, elle prend un tableau en paramètre et renvoie un `float`.

Cette fonction calcule la moyenne des nombres contenus dans le tableau contenu en paramètres et la renvoie.

### Tester votre fonction

```php
echo average([12, 15, 18, 9])."<br>"; // doit afficher 13.5
echo average([12, 15, 18, 11, 14])."<br>"; // doit afficher 14 
```

### N'oubliez pas de sauvegarder votre travail

```sh
git add exercice-2.php
git commit -m "exercice 2 fonctions"
git push
```


## Exercice 3

Dans un fichier `exercice-3.php`.

Vous allez devoir créer une fonction appellée `isOdd`, elle prend un nombre entier en paramètre et renvoie un booléen.

Si le nombre passé en paramètres est pair, elle renvoie `true`, sinon elle renvoie false.

### Tester votre fonction

```php
var_dump(isOdd(12)); // doit afficher 1 ou true
echo "<br>";
var_dump(isOdd(29)); // doit afficher 0 ou false
echo "<br>";
/* echo "{isOdd(12)}<br>";
echo "{isOdd(29)}<br>"; */
```

### N'oubliez pas de sauvegarder votre travail

```sh
git add exercice-3.php
git commit -m "exercice 3 fonctions"
git push
```


## Exercice 4

Dans un fichier `exercice-4.php`.

Vous allez devoir créer une fonction appellée `getFirst` qui prend un tableau en paramètre et renvoie soit un nombre entier soit null.

Si le tableau passé en paramètres n'est pas vide, la fonction renvoie le premier élément. Sinon elle renvoie null.

### Tester votre fonction

```php
echo "{getFirst([13, 24, 45])}<br>"; // doit afficher 13
echo "{getFirst([])}<br>"; // doit afficher null
```

### N'oubliez pas de sauvegarder votre travail

```sh
git add exercice-4.php
git commit -m "exercice 4 fonctions"
git push
```