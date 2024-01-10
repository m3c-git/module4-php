---
theme: theme.json
author: Gaellan
date: Jan 10, 2024
paging: Page %d sur %d
---

# Introduction au PHP

## Plan du cours

### C'est quoi le PHP

### Les variables et les types

### Exercices sur les variables et les types

### Les conditions

### Les boucles

### Exercices sur les boucles et les tableaux

### Les fonctions

### Exercices sur les fonctions

### Echo et syntaxe courte

### Exercices utilisation de echo

### Mini-projet bulletin de notes

---

# Les variables et les types

## Déclarer une variable en PHP

Pour déclarer les variables en PHP, pas besoin de mot-clé, par contre le nom d'une variable commence toujours par `$`.

```php
$message = "Hello!"; // la variable $message contient Hello!
$age = 42; // la variable $age contient 42
```

Les variables PHP sont mutables, le système de `const` disponible en JavaScript n'existe pas tel quel en PHP.

## Apparté : les références

Vous verrez parfois une syntaxe du type `&$variable`. Il s'agit d'une référence. Vous n'aurez pas à l'utiliser, et les cours ne les utiliseront pas.

En version très courte chaque donnée à une adresse en mémoire (dans la RAM). Quand on stocke une référence sur une variable, on stocke en fait une sorte de lien vers le contenu se trouvant à l'adresse de cette variable.

```php
$message = "Hello !"; 
$message_ref = &$message;
echo $message_ref; // Hello
$message = "Hello World!";
echo $message_ref; // Hello World
```

Les références existent dans la plupart des langages qui nécéssitent de gérer la mémoire. Elles sont entre autres très présentes en C et C++ (or, PHP est écrit en C).

---

# Les types PHP : string

Il existe deux façons de déclarer les chaînes de caractères en PHP : 

```php
$message = "Hello !";
$msg = 'Salut!';
```

La différence entre les doubles quotes `""` et les simples quotes `''` c'est au niveau de la concaténation des contenus qu'elle se passe :

## Concaténation

En PHP l'opérateur de concaténation est le symbole `.` ( pour rappel c'était le symbole `+` en JavaScript).

```php
$message = 'Hello ';
echo $message; // Hello 
$message = 'Hello '.'World!';
echo $message; // Hello World!
```

Pour la concaténation, on utilise donc plutôt les simples quotes `''`.

## Injection

Comme en JavaScript, vous pouvez composer vos chaînes de caractères en y injectant des variables ou retours de fonctions :

```php
$message = "Hello";
echo $message; // Hello
$message_full = "$message World!";
echo $message_full; // Hello World!
```

Si vous devez utiliser quelque chose de plus complexe qu'une simple variable, ajoutez des accolades :

```php
$user = new User(); // oui même syntaxe de base qu'en JS
$message = "Hello";
$message = "Hello {$user->getFirstName()}";
```

Lorsque l'on manipule des chaînes de caractères avec l'injection de variables on utilise les doubles quotes `""`.

---

# Les types PHP : les nombres

PHP est un langage plus typé que ne l'est JavaScript. Une différence notable c'est qu'il fait une différence entre les nombres entiers et les nombres décimaux.

💡 Rappel de maths : un nombre entier c'est un nombre sans virgule, une nombre décimal c'est un nombre avec virgule.

## int

`int` (abbréviation d'integer) représente un nombre entier.

## float

`float` représente un nombre décimal.


```PHP
$nb1 = 42; // c'est un int
$nb2 = 4.2; // c'est un float
```

---

# Les types PHP : boolean et null

## Booléens

Eux ne changent pas. Ils valent toujours `true` ou `false` et le type peut s'appeler `bool` ou `boolean`.


## null

`null` ne change pas beaucoup non plus. Il vaut toujours `null`.

---


# Les types PHP : les tableaux

Les tableaux existent également en PHP, les tableaux basiques fonctionnent sur le même principe `$tableau[key] = $value` que ceux en JavaScript et ils sont également indexés en commencant par 0.

```php
$nb_tab = [42, 35, 28];
$str_tab = ["Chat", "Chien", "Lapin"];
```

Mais en PHP, un index n'est pas obligatoirement en nombre, on peut également utiliser par exemple des chaînes de caractères. On parle dans ces cas là de tableaux associatifs.

## Tableaux associatifs

```php
$user = [
	"firstName" => "Mary",
    "lastName" => "Poppins"
];
echo $user["firstName"]; // Mary
```

---

# Les types PHP : conversions de type

Comme PHP est un langage typé, il est possible que vous vouliez passer une variable d'un type à un autre. La synaxe sera toujours la même pour tous les types dits "primitifs" (int, float, bool, string, ...) :


```php
$string = '1';  // '1'
$int = (int) '1';  // 1
$float = (float) '1';  // 1.0
$bool = (bool) '1';  // true
```

---

# Exercices sur les variables et les types

Dans le fichier `exercices-variables-types.md` sur Discord.

---

# Les conditions en PHP

## Comparaisons

Les opérateurs de comparaisons sont les mêmes en PHP qu'en JavaScript :

### ===

```php
$nb1 = 42;
$nb1 === 21 * 2; // true
```

### !==

```php
$nb1 = 42;
$nb1 !== 21 * 2; // false
```

### >

```php
$nb1 = 42;
$nb1 > 20; // true
```

### <

```php
$nb1 = 42;
$nb1 < 20; // false
```

### >=

```php
$nb1 = 42;
$nb1 >= 2 + (20 * 2); // true
```

### <=

```php
$nb1 = 42;
$nb1 <= 2 + (20 * 2); // true
```

---

# Les conditions en PHP

## Conditions

Les conditions aussi fonctionnent de la même façon en PHP.

### if

```php
$nb = 42;

if($nb === (5 * 4) + 2)
{

}
```

### else if

```php
$nb = 42;

if($nb === (5 * 4) + 2)
{

}
else if ($nb < (5 * 4) + 2)
{

}
```

### else

```php
$nb = 42;

if($nb === (5 * 4) + 2)
{

}
else if ($nb < (5 * 4) + 2)
{

}
else
{

}
```

---

# Les boucles en PHP

## while

La boucle `while` en PHP ne diffère pas beaucoup de celle en JS, si ce n'est qu'il ne faut pas oublier son symbole `$` pour les variables :

```php
$i = 0;
$tab = ["Chat", "Chien", "Lapin"];

while($i < count($tab))
{
	echo "$tab[$i]\n";
	$i++;
}
```

Pour compter le nombre d'éléments d'un tableau en PHP il faut donc utiliser la fonction `count()`.

## for

La boucle `for` non plus ne change pas, à part pour le symbole `$` et l'utilisation de la fonction `count()`.

```php
$tab = ["Chat", "Chien", "Lapin"];

for($i = 0; $i < count($tab); $i++)
{
	echo "$tab[$i]\n";
}

```

---

# Les boucles en PHP : une nouveauté

## foreach

La nouvelle boucle qui n'existait pas en JS et qui généralement la plus performante en PHP (et donc celle à privilégier) c'est la boucle `foreach`

```php
$tab = ["Chat", "Chien", "Lapin"];
 
foreach($tab as $animal)
{
    echo "$animal";
}
```

Elle a également une autre syntaxe qui vous permet de connaitre la clé (l'équivalent de votre `$i` dans une boucle `while` ou `for`) :

```php
$tab = ["Chat", "Chien", "Lapin"];

foreach($tab as $key => $animal)
{
    echo "$animal";
}
```

---

# Exercices sur les boucles et les tableaux

Dans le fichier `exercices-boucles-tableaux.md` sur Discord.

---

# Les fonctions en PHP

## Déclarer une fonction

Déclarer une fonction en PHP ça ressemble beaucoup à ce que vous connaissez déjà, avec toujours cette histoire de `$` en plus :

```php
function add($nb1, $nb2)
{
    return $nb1 + $nb2;
}
```

Techniquement ça c'est valable en PHP, mais...

## La grande différence avec JS : le type hinting

Mais PHP est un langage typé, il va donc falloir préciser les types de nos paramètres et du retour de notre fonction :

```php
function add(int $nb1, int $nb2) : int
{
    return $nb1 + $nb2;
}
```

Ici nous précisons que notre fonction prend deux entiers en paramètres et renvoie un entier.

🧐 Et si je voulais pouvoir utiliser des décimaux ? Par défaut utilisez des floats, techniquement un entier `5` vaut la même valeur qu'un décimal `5.0`. Donc si vous ne savez pas quel type de nombre vous pouvez recevoir : utilisez `float`.

---

# Les fonctions en PHP

### Le type nullable

Votre fonction peut parfois renvoyer soit quelque chose, soit null, il faut également le préciser :

```php
function divide(float $nb1, float $nb2) : ? float
{
    if($nb2 === 0)
    {
        return null;
    }
    else
    {
        return $nb1 / $nb2;
    }
}
```

## Utiliser une fonction

Pour utiliser une fonction, par contre ça ne change pas :

```php
function add(int $nb1, int $nb2) : int
{
    return $nb1 + $nb2;
}

add(3, 2); // ça ça marche

$x = 3;
$y = 2;

add($x, $y); // ça marche aussi

```
---

# Exercices sur les fonctions

Dans le fichier `exercices-fonctions.md` sur Discord.

---

# L'affichage en PHP : utiliser echo

## echo

Le PHP est un langage qui sert à générer du texte (principalement du HTML mais pas que), la fonction qui permet donc d'écrire du texte est donc la plus centrale du PHP.

Cette fonction c'est `echo`.

```php
echo "Truc";

$txt = "Mon texte";
echo $txt;

function add($nb1, $nb2)
{
    return $nb1 + $nb2;
}

echo add(5, 2);
```

Attention cependant PHP permet aussi d'injecter du texte dynamique dans un texte statique. Par exemple dans un fichier `.phtml` (le format pour tous vos fichiers HTML maintenant que l'on manipule du PHP).

```php
<?php $titre = "Mon titre"; ?>
```

```html
<section>
    <h1><?php echo $titre; ?></h1>
</section>
```

---

# Affichage en PHP : conditionner l'affichage

Si je mélange `echo` aux boucles et aux conditions, je peux complètement conditionner et automatiser mon affichage :

```php
$numbers = [42, 35, 67, 24, 18];
```

```html
<ul>
    <?php foreach($numbers as $number) { 
    if($number % 2 === 0)
    {
    ?>
        <li class="red">
            <?php echo $number; ?>
        <li>
        <?php
    }
    else
    {
    ?>
        <li class="blue">
            <?php echo $number; ?>
        </li>
    <?php
    }
} ?>
</ul>
```

---

# Exercices utilisation de echo

Dans le fichier `exercices-echo.md` sur Discord.

