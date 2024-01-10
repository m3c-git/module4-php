# Exercices sur les variables et les types en PHP

N'oubliez pas que pour écrire du PHP dans un fichier il faut mettre les balises PHP :

```php
<?php

// votre code

?>
```

## Exercice 0

- Créez un repository public avec un README sur GitHub, appelez-le `bre01-php-j1`
- Clonez le dans le dossier `sites/php` de votre IDE.
- Créez un dossier `types-et-variables` dans le dossier `bre01-php-j1`


## Exercice 1 : variables

Dans un fichier `exercice-1.php`.

Déclarez une variable `$nb` qui prend la valeur `42` et affichez-la avec un `echo`.
Déclarez une variable `$str` qui prend la valeur `'42'` et affichez-la avec un `echo`.
Déclarez une variable `$nbstr` qui est une string, injectez-y la variable `$nb` et affichez-la avec un `echo`.

### N'oubliez pas de sauvegarder votre travail

```sh
git add exercice-1.php
git commit -m "exercice 1 types et variables"
git push
```


## Exercice 2 : tableaux

Dans un fichier `exercice-2.php`.

Déclarez un tableau de nombres appelé `$nb_tab` qui contient des `int` et des `float` et affichez-le en utilisant `print_r`.

Déclarez un tableau de nombres appelé `$str_tab` qui contient des `string` et affichez-le en utilisant `print_r`.

La documentation de `print_r` : https://www.php.net/manual/fr/function.print-r.php

### N'oubliez pas de sauvegarder votre travail

```sh
git add exercice-2.php
git commit -m "exercice 2 types et variables"
git push
```


## Exercice 3 : tableaux associatifs

Dans un fichier `exercice-3.php`.

Créez un tableau associatif `$animal` qui aura les clés `"species"`, `"name"` et `"age"`.
Mettez-y les valeurs que vous voulez et affichez-le en utilisant `print_r`.

### N'oubliez pas de sauvegarder votre travail

```sh
git add exercice-3.php
git commit -m "exercice 3 types et variables"
git push
```


## Exercice 4 : conversions de types

Dans un fichier `exercice-4.php`.

Créez une variable `$data` qui contient l'entier `42`.
Créez une variable `$float` qui transforme `$data` en float.
Créez une variable `$str` qui transforme `$float` en string.

### N'oubliez pas de sauvegarder votre travail

```sh
git add exercice-4.php
git commit -m "exercice 4 types et variables"
git push
```