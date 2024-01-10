# Mini-projet Bulletin de notes

# Étape 0

Créez un dossier `scorecard`, créez-y un fichier `index.phtml`.

Faites tout votre projet dans le fichier `index.phtml`, les étapes se suivent.

```html
<article class="">
	<header>
		<h1>Nom et prénom de l'étudiant</h1>
	</header>
	<section>
		<h2>Notes : </h2>
		<ul>
			<li>Note 1</li>
			<li>Note 2</li>
			<li>Note 3</li>
		</ul>
	</section>
	<footer>
		<h3>Moyenne des notes de l'étudiant </h3>
	</footer>
</article>
```

Ci-dessus vous avez le HTML qui permet d'afficher le profil d'un étudiant. Nous allons utiliser un tableau de tableaux associatifs en PHP pour dynamiser ce HTML.

```php
$students = [
	[
		"firstName" => "James",
		"lastName" => "Fields",
		"grades" => [12, 11, 15],
		"average" => -1
	],
	[
		"firstName" => "Richard",
		"lastName" => "Stein",
		"grades" => [18, 12, 13],
		"average" => -1
	],
	[
		"firstName" => "Mark",
		"lastName" => "Hartoff",
		"grades" => [9, 11, 10],
		"average" => -1
	],
	[
		"firstName" => "Thomas",
		"lastName" => "Nestle",
		"grades" => [9, 8, 5],
		"average" => -1
	],
	[
		"firstName" => "Jeremy",
		"lastName" => "Brent",
		"grades" => [18, 15, 16],
		"average" => -1
	]
];
```


## Étape 1 : la liste des étudiants

Parcourez le tableau des étudiants et pour chacun d'entre eux, affichez le bon HTML en dynamisant le `<h1>` avec le bon nom et le bon prénom.


## Étape 2 : afficher les notes

Nous allons compléter le code de l'étape 1. Maintenant en plus nous allons dynamiser les `<li>` avec la liste des notes de l'étudiant.


## Étape 3 : calculer et afficher la moyenne

Nous allons continuer à compléter le code des étapes 1 et 2.

Parcourez une première fois le tableau des étudiants sans afficher e HTML. Pour chacun des étudiants, calculez sa moyenne (de préférence dans une fonction) et stocker là dans son tableau associatif.

Ensuite dans votre boucle qui affiche le HTML, dynamisez la moyenne de l'étudiant dans le `<h3>`.


## Étape 4 : dynamiser les classes CSS

Nous allons compléter le code des étapes précédentes, en dynamisant les classes que nous appliquons sur les `<article>`.

Dans un fichier `style.css`, définissez trois classes :

- `.orange` change la couleur du texte en orange
- `.red` change la couleur du texte en rouge
- `.green` change la couleur du texte en vert

Si un étudiant a une moyenne inférieur à 10, son article a la classe `red`. Si sa moyenne est entre 10 et 13, son article a la classe `orange`. si sa moyenne est supérieure à 13, l'article a la classe `green`.