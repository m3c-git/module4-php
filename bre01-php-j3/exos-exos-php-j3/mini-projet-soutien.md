# Mini-projet de soutien : Ze Blog

## Étape 0 : le repo Git

- Créez un repository public avec un README sur GitHub, appelez-le `bre01-php-j3`
- Clonez le dans le dossier `sites/php` de votre IDE.
- Créez un dossier `blog` dans votre dossier `bre01-php-j3`.


## Étape 1 : récupérer le fichier

Sur Discord, dans le chan soutien vous allez devoir récupérer les fichiers suivants : 

- `header.phtml`
- `home.phtml`
- `article.phtml`
- `categories.phtml`
- `posts.php`
- `layout.phtml`
- `style.css`


## Étape 2 : créer l'index et récupérer la route

Vous allez devoir créer un fichier `index.php`. Il créé une variable `$route` qu'il initialise à `null`.

Si la superglobale `$_GET["route"]` existe il lui donne sa valeur.

Que la superglobale existe ou pas, `index.php` va faire un `require` de `layout.phtml`.


## Étape 3 : dynamiser le layout

Dans le fichier `layout.phtml`, après le `require` de `header.phtml`, vous allez devoir créer une condition :

Si `$route` vaut `home`, faites un require de `home.phtml`.
Si `$route` vaut `categories`, faites un require de `categories.phtml`.
Si `$route` vaut `article`, faites un require de `article.phtml`.

Dans tous les autres cas , faites un require de `home.phtml`.

Testez que votre condition fonctionne en changeant à la main l'URL de votre page.


## Étape 4 : récupérer les données du blog

Tout en haut de votre fichier `index.php`, faites en sorte de faire un `require` du fichier `posts.php`.


## Étape 5 : dynamiser la home

Dans votre fichier `home.phtml`, utilisez les données contenus dans `post.php` pour dynamiser l'intégration. Pour chaque catégorie, vous devez afficher les contenus pour les 3 premiers posts de la catégorie.

Les images ne changent pas vous pouvez garder celles de l'intégration en lur ajoutant à la main un attribut `alt`.


## Étape 6 : dynamiser une première fois la nav

Dans le fichier `header.phtml` faites en sorte que le lien `Home` renvoit sur la home.


## Étape 7 : Dynamiser la page catégories

Dans la page catégorie, en plus de passer la route dans les paramètres, vous allez aussi récupérer le nom de la catégorie, dans la superglobale `$_GET["category"]`.

En fonction du nom de cette catégorie, dynamisez l'intégration en affichant tous les posts de la catégorie. Si la catégorie n'existe pas affichez simplement `No posts in this category.`.


## Étape 8 : Dynamiser une seconde fois la nav

Dans le fichier `header.phtml`, faites en sorte que les liens vers les catégories appellent les bonnes catégories.


## Étape 9 : dynamiser les articles

Dans le fichier `article.phtml` vous allez récupérer le nom de la catégorie de l'article avec la superglobale `$_GET["category"]` et le numéro du post dans la catégorie avec la superglobale `$_GET["post"]`.

Une fois ces deux informations récupérées, dynamisez l'intégration en utilisant le bon titre et le bon contenu. L'image d'en tête ne change pas, ajoutez lui simplement un attribut `alt` à la main.


## Étape 10 : Dynamiser les liens de la home et des catégories

Dans vos fichiers `home.phtml` et `categories.phtml` faites en sorte que les liens des article amènent sur les bons articles.