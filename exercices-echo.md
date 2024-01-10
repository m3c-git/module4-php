# Exercices sur l'affichage en PHP

N'oubliez pas que pour écrire du PHP dans un fichier il faut mettre les balises PHP :

```php
<?php

// votre code

?>
```

## Exercice 0

- Créez un dossier `echo` dans le dossier `bre01-php-j1`


## Exercice 1

Dans un fichier `exercice-1.phtml`.

En utilisant le code HTML et PHP suivant, utilisez echo ou `<?= ?>` pour faire en sorte d'afficher la variable `$title` dans le h1 de l'article et la variable `$content` dans le p de l'article.

```php
<?php

$title = "This is the title of the article";
$content = "Ths is the content of the article";

?>
```

```html
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Exercice 1 echo</title>
	</head>
	<body>
		<article>
			<h1>

			</h1>
			<p>

			</p>
		<article>
	</body>
</html>
```


### N'oubliez pas de sauvegarder votre travail

```sh
git add exercice-1.phtml
git commit -m "exercice 1 echo"
git push
```


## Exercice 2

Dans un fichier `exercice-2.phtml`.

Utilisez les codes PHP, HTML et CSS ci-dessous, utilisez une condition pour afficher les variables. Si le nombre est pair, affichez le dans un paragraphe qui a la classe `red`. S'il est impair affichez le dans un paragraphe qui a la classe `blue`.

```php
$number1 = 42;
$number2 = 33;
```

```css
.red {
	color:red;
}

.blue {
	color:blue;
}
```

```html
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Exercice 2 echo</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		
	</body>
</html>
```

### N'oubliez pas de sauvegarder votre travail

```sh
git add exercice-2.phtml
git commit -m "exercice 2 echo"
git push
```


## Exercice 3

Dans un fichier `exercice-3.phtml`.

Utilisez le code PHP et HTML ci-dessous pour faire une boucle qui affichera chacun des nimaux au sein d'une liste non-ordonnée.

```php
$animals = ["Chat", "Chien", "Souris", "Lama"];
```

```html
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Exercice 3 echo</title>
	</head>
	<body>
		
	</body>
</html>
```


### N'oubliez pas de sauvegarder votre travail

```sh
git add exercice-3.phtml
git commit -m "exercice 3 echo"
git push
```

