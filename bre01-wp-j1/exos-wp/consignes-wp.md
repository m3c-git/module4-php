
Avec ce mini-projet nous allons vous créer un Portfolio basique tout en créant un thème WordPress sur mesure.


## Étape 0 : le repo

- Créez un repository public avec un README sur GitHub, appelez-le `bre01-wordpress`
- Clonez le dans le dossier `sites/php` de votre IDE.

💡Ce fichier de consignes contient des screenshots, ouvrez-le dans quelque chose qui interprête les images dans le Markdown.


## Étape 1 : Installer WordPress

Installation de WordPress, nous le faisons en commun tou-te-s ensemble.


## Étape 2 : Créer le thème

Dans le dossier `wp-content/themes` créez un dossier `yep`.

Dans ce dossier `yep`, créez un fichier `index.php` que vous laissez vide :

Toujours dans le dossier `yep`, créez un fichier `style.css` qui contient le code suivant :

```css
/*!  
  
Theme Name: Yep  
Description: Thème WordPress custom pour Prénom Nom  
Version: 1.0  
Author: Prénom Nom  
Author URI: Mettez le lien de votre profil GitHub  
  
*/
```

Ce petit bloc de commentaire, c'est la carte d'identité de votre thème.


## Étape 3 : Activer le thème

Nous faisons l'activation du thème tous ensemble pour vérifier que tout va bien.


## Étape 4 : Créer les pages

Dans votre interface d'administration vous allez créer 1 page :

- Accueil

Dans les réglages de lecture du site précisez qu'accueil est votre page d'accueil statique.


## Étape 5 : Installer et activer les extensions les extensions

Vous allez installer et activer les extensions suivantes :

### Yoast SEO

https://fr.wordpress.org/plugins/wordpress-seo/


### Advanced Custom Fields

https://wordpress.org/plugins/advanced-custom-fields/


### Contact Form 7

https://fr.wordpress.org/plugins/contact-form-7/


## Étape 6 : ajouter la gestion des thumbnails de posts

Dans votre dossier `yep`, créez un fichier `functions.php`. Mettez-y le code suivant :

```php
<?php

add_theme_support('post-thumbnails');
```

cela permet de signaler à WordPress que votre thème autorise l'utilisateur à sélectionner une image d'illustration pour chaque post.


## Étape 7 : créer le template de page d'accueil

Dans votre dossier `yep`, créez le fichier `front-page.php`.

```html
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<?php wp_head(); ?>  
		<meta content="<?php echo get_bloginfo( 'name' );?>" name="title">  
		<meta content="<?php echo get_bloginfo( 'description' );?>" name="description">  
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
		<link rel="preconnect" href="https://fonts.googleapis.com">  
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />  
<title><?php echo get_bloginfo( 'name' );?></title>
	</head>
	<body>

		<?php wp_footer(); ?>
	</body>
</html>
```


C'est dans ce fichier que vous allez placer l'intégration de votre page d'accueil.


## Étape 8 : Intégration

Dans votre fichier `front-page.php`, faites l'intégration de la maquette que vous trouverez ici : https://res03.sites.3wa.io/assets/files/php/j16/maquette.png.


## Étape 9 : Ajouter un emplacement de menu

Pour ajouter des menus à un thème WordPress, il faut ajouter des emplacements pour ces menus. (Dans le header, le footer, la sidebar, où vous voulez).

Nous allons commencer par ajouter un emplacement de menu dans notre header.

Dans le fichier `functions.php` :

```php
function register_my_menus() 
{ 
	register_nav_menus( array( 
	'header-menu' => __( 'Menu de navigation' ))); 
}

add_action( 'init', 'register_my_menus' );
```

Nous avons déclaré un menu qui s'appellera "Menu de navigation".


## Étape 10 : Configurer le Menu

Avant de configurer notre Menu nous allons créer 3 nouvelles pages : 

- À propos
- Mes projets
- Me contacter

Puis nous allons configurer le menu en nous rendant dans la gestion des Menus :

![Gestion des Menus](https://res03.sites.3wa.io/assets/files/php/j16/menu-menus.png)


Et nous allons créer un nouveau menu, appelé Navigation, auquel nous allons ajouter nos pages :

![Créer le menu](https://res03.sites.3wa.io/assets/files/php/j16/dashboard-menu.png)

N'oubliez pas de cocher la case pour lui dire que son emplacement c'est "Menu de navigation" puis enregistrez vos modifications.


## Étape 11 : Dynamiser le menu dans le template

Nous allons commencer par coder une fonction qui nous permet de récupérer les éléments de notre menu et de les afficher.

Dans votre `functions.php` ajoutez le code suivant :

```php
function getNavigationMenu() {  
    $items = wp_get_nav_menu_items('Navigation');  
  
    return $items;  
}
```

Ici nous utilisons la fonction native de WordPress pour récupérer la liste des éléments de notre menu de navigation et nous la retournons.

Ensuite dans votre fichier `front-page.php`, appelez la fonction tout en haut du fichier :

```php
<?php  
	$menuItems = getNavigationMenu();  
?>
```

Il suffit ensuite de faire une boucle qui s'adapte à votre intégration, pour afficher un par un les liens de la nav.

Un exemple simple :

```php
<?php foreach($menuItems as $item) { ?>  
    <li>  
        <a href="<?= $item->url ?>">  
            <?= $item->title ?>  
        </a>  
    </li>  
<?php  
}  
?>
```

Ici je parcours les éléments du menu dans une boucle et pour chacun je mets l'url en `href` du `<a>` et j'affiche le titre.


## Étape 12 : La section À propos

Nous allons commencer par aller créer des champs de contenus pour pouvoir dynamiser le titre et les paragraphes de la partie "À propos" de la page.

Commencez par vous rendre dans le dashboard de l'extension Advanced Custom Fields :


![Dashboard ACF](https://res03.sites.3wa.io/assets/files/php/j16/dashboard-acf-vide.png)

Puis commencer par créer un groupe de champ pour représenter les contenus de la section "À propos" :

![Champs ACF](https://res03.sites.3wa.io/assets/files/php/j16/acf-fields.png)

Puis précisez un peu plus bas dans les règles d'affichage du groupe qu'il s'affiche lorsque l'on modifie la page "Accueil" :

![Champs ACF](https://res03.sites.3wa.io/assets/files/php/j16/acf-rules.png)

Vous pouvez maintenant remplir le contenu des champs directement en allant modifier votre page Accueil :

![ACF À propos](https://res03.sites.3wa.io/assets/files/php/j16/edit-about.png)


## Étape 13 : dynamiser À propos avec les nouveaux champs

Dans le `functions.php` nous allons créer une fonction qui nous permet de récupérer et préparer les données dont nous avons besoin sur la page : 

```php
function getHomepageData()  
{  
    $data = [];  
    $data["a-propos"] = [];  
    $data["a-propos"]["titre"] = get_field("titre_a_propos");  
    $data["a-propos"]["contenu"] = get_field("contenu_a_propos");  
  
    return $data;  
}
```

Et dans votre `front-page.php` nous allons récupérer ses données :

```php
<?php  

$menuItems = getNavigationMenu();  
$data = getHomepageData();  
  
?>
```

pour ensuite les utiliser pour dynamiser notre intégration :

```php
<section id="about">  
    <h2><?= $data["a-propos"]["titre"] ?></h2>  
    <p>  
        <?= $data["a-propos"]["contenu"] ?>  
    </p>  
</section>
```


## Étape 14 : Créer les Articles et Catégories

### Créer les catégories

Créez une catégorie d'articles appelée Projet.

Créez les sous catégories suivantes dont la catégorie parente est Projet :

- Site Promotionnel
- Site Institutionnel
- Site Vitrine
- Site e-commerce
- Application santé

### Créer les articles

Créez les articles suivants en leur mettant la bonne catégorie et la bonne image à la une :

- Pharmacie de Maurepas
- Librairie l'écume des jours
- Boulangerie Galtier
- Mairie de Ploutruc
- Festival des choses


## Étape 15 : dynamiser les projets sur l'accueil

Pour commencer nous allons devoir créer une fonction qui nous permet de récupérer tous les articles qui ont la catégorie Projet, et nous voulons également récupérer le nom de leur sous-catégorie et les informations de leur image d'illustration.

Observez les fonctions suivantes et ajoutez-les dans votre `functions.php` :

```php
function getThumbnailUrlAndAlt($post)  
{  
    $thumbID = get_post_thumbnail_id($post);  
    $thumb = get_post($thumbID);  
    $alt = get_post_meta ( $thumbID, '_wp_attachment_image_alt', true );  
  
    return ["url" => $thumb->guid, "alt" => $alt];  
}

function getProjects()  
{  
    // preparing the request for the posts with the project category  
    $category_id = get_category_by_slug("projet")->term_id;  
    $args = [  
        'numberposts' => 5,  
        'category' => $category_id  
    ];  
  
    // the request  
    $posts = get_posts($args);  
  
    $projects = [];  
  
    // for each of the posts  
    foreach($posts as $post)  
    {  
        $projects[] = [  
            "data" => $post,  
            "image" => getThumbnailUrlAndAlt($post), // retrieve the thumbnails  
            "category" => get_the_category($post->ID)[1]->name // retrieve the name of the subcategory  
        ];  
    }  
  
    return $projects;  
}
```

Dans `front-page.php` faites un var_dump pour voir exactement ce qu'elle va vous renvoyer et faites en sorte de dynamiser la sections qui contient les projets sur la page d'accueil.

Vous allez devoir modifier votre fonction de récupération des données de la homepage : 

```php
function getHomepageData()  
{  
    $data = [];  
    $data["a-propos"] = [];  
    $data["a-propos"]["titre"] = get_field("titre_a_propos");  
    $data["a-propos"]["contenu"] = get_field("contenu_a_propos");  
    $data["projets"] = getProjects();  
  
    return $data;  
}
```


## Étape 16 : dynamiser les images des projets

Il nous reste un problème à gérer : nos images de projets étaient des background images, il va nous falloir trouver un moyen de les dynamiser sachant que nous ne pouvons pas modifier le CSS depuis notre PHP.

Nous allons commencer par rajouter un attribut à la balise qui contient notre projet :

```php
<article data-img="<?= $projet["image"]["url"] ?>">
</article>
```

Nous allons ensuite écrire un script JS qui récupère cet attribut et l'utilise comme background image.

```js
window.addEventListener("DOMContentLoaded", function(){  
   let $articles = document.querySelectorAll("#projects article");  
  
   for(let i = 0; i < $articles.length; i++)  
   {  
       let $url = $articles[i].getAttribute("data-img");  
       $articles[i].style.backgroundImage = `url("${$url}")`;  
   }  
});
```

Modifiez les sélecteurs pour correspondre à votre architecture HTML et retirez vos background-image de votre CSS.


## Étape 17 : Le formulaire

Nous allons aller utiliser l'extension Contact Form 7 pour générer notre formulaire de contact : 


![Gestion des Formulaires](https://res03.sites.3wa.io/assets/files/php/j16/dashboard-contact.png)

Créez un formulaire, et utilisez le blocs de l'extension pour le faire correspondre à votre HTML. Enregistrez-le et notez le shortcode qui lui a été attribué.

Nous allons rajouter un filtre dans notre `functions.php` pour éviter que Contact Form 7 nous rajoute des balises `<p>` un peu reloues :

```php
add_filter('wpcf7_autop_or_not', '__return_false');
```

Ensuite nous allons remplacer le code HTML de notre formulaire par l'appel du shortcode de Contact Form 7 :

```php
<section id="contact">  
    <h2>Me contacter</h2>  
    <?php echo do_shortcode("[contact-form-7 id='50' title='Contact-Accueil']"); ?>  
</section>
```

Ajustez ensuite votre CSS pour mieux coller à ce que vous a généré Contact Form 7 et votre formulaire est intégré.

Vous pouvez maintenant aller modifier les messages de retour dans l'extension ou bien l'email qui vous sera envoyé pour signifier que l'on vous a envoyé une demande de contact.


## Étape 18 : Créez un template simple pour vos articles

Créez un fichier `single.php` dans lequel vous allez commencer par ajouter le code basique suivant :

```php
<?php

$menuItems = getNavigationMenu();

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <?php wp_head(); ?>
        <meta content="<?php echo get_bloginfo( 'name' );?>" name="title">
        <meta content="<?php echo get_bloginfo( 'description' );?>" name="description">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
        <title><?php echo get_bloginfo( 'name' );?></title>
    </head>
    <body id="post">
    <header>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Gaellan-Logo.svg" alt="Logo : une version schématique d'un cerveau et ses connexions"/>
        </figure>
        <nav>
            <ul>
                <?php foreach($menuItems as $item) { ?>
                    <li>
                        <a href="<?= $item->url ?>">
                            <?= $item->title ?>
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </nav>
    </header>
    <main>
        <?php
        // The Loop
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
        else :
            echo 'Nothing found';
        endif;
        ?>
    </main>
    <?php wp_footer(); ?>
    </body>
</html>
```

Adaptez évidemment en remplacant la nav par la votre.

Si vous mettez du contenu dans un article et que vous prévisualisez l'article pour devriez voir ce contenu s'afficher.

Malheureusement ça donne quelque chose d'un peu primitif et on ne voit même pas le titre de l'article. On va donc améliorer un peu ça.

Remplacez le contenu de votre `single.php` par :

```php
<?php   
$menuItems = getNavigationMenu();  
global $post;  
$post_title = $post->post_title;  
$thumbnail = get_the_post_thumbnail_url($post);  
?>  
  
<!DOCTYPE html>  
<html lang="fr">  
    <head>  
        <meta charset="utf-8" />  
        <?php wp_head(); ?>  
        <meta content="<?php echo get_bloginfo( 'name' );?>" name="title">  
        <meta content="<?php echo get_bloginfo( 'description' );?>" name="description">  
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <link rel="preconnect" href="https://fonts.googleapis.com">  
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">  
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />  
        <title><?php echo get_bloginfo( 'name' );?></title>  
    </head>  
    <body id="post">  
    <header>  
        <figure>  
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Gaellan-Logo.svg" alt="Logo : une version schématique d'un cerveau et ses connexions"/>  
        </figure>  
        <nav>  
            <ul>  
                <?php foreach($menuItems as $item) { ?>  
                    <li>  
                        <a href="<?= $item->url ?>">  
                            <?= $item->title ?>  
                        </a>  
                    </li>  
                    <?php  
                }  
                ?>  
            </ul>  
        </nav>  
    </header>  
    <main>  
        <figure>  
            <img src="<?= $thumbnail ?>" />  
        </figure>  
        <h2><?= $post_title; ?></h2>  
        <?php  
        // The Loop  
        if (have_posts()) :  
            while (have_posts()) :  
                the_post();  
                the_content();  
            endwhile;  
        else :  
            echo 'Nothing found';  
        endif;  
        ?>  
    </main>  
    <?php wp_footer(); ?>  
    </body>  
</html>
```

Maintenant vous avez une version très basique d'une page d'article : créez un article avec du vrai contenu et faites en sorte que la mise en page ressemble à ceci :

https://res03.sites.3wa.io/assets/files/php/j16/maquette-single.png


## Étape 19 : Template de page par défaut

Vous allez créer un fichier `page.php` dans lequel vous allez placer du code pour un template de page par défaut : 

```php
<?php
$menuItems = getNavigationMenu();  
global $post;  
$post_title = $post->post_title;  
$thumbnail = get_the_post_thumbnail_url($post);  
?>  
  
<!DOCTYPE html>  
<html lang="fr">  
    <head>  
        <meta charset="utf-8" />  
        <?php wp_head(); ?>  
        <meta content="<?php echo get_bloginfo( 'name' );?>" name="title">  
        <meta content="<?php echo get_bloginfo( 'description' );?>" name="description">  
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <link rel="preconnect" href="https://fonts.googleapis.com">  
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">  
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />  
        <title><?php echo get_bloginfo( 'name' );?></title>  
    </head>  
    <body id="page">  
    <header>  
        <figure>  
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Gaellan-Logo.svg" alt="Logo : une version schématique d'un cerveau et ses connexions"/>  
        </figure>  
        <nav>  
            <ul>  
                <?php foreach($menuItems as $item) { ?>  
                    <li>  
                        <a href="<?= $item->url ?>">  
                            <?= $item->title ?>  
                        </a>  
                    </li>  
                    <?php  
                }  
                ?>  
            </ul>  
        </nav>  
    </header>  
    <main>  
        <h2><?= $post_title; ?></h2>  
        <?php  
        // The Loop  
        if (have_posts()) :  
            while (have_posts()) :  
                the_post();  
                the_content();  
            endwhile;  
        else :  
            echo 'Nothing found';  
        endif;  
        ?>  
    </main>  
    <?php wp_footer(); ?>  
    </body>  
</html>
```


## Étape 20 : Template de page spécifique

Créez un fichier `template-about.php` dans lequel vous allez placer le code suivant :

```php
<?php  
/*  
Template Name: À propos  
*/  

$menuItems = getNavigationMenu();

?>
```

Vous allez ensuite réaliser une intégration statique pour que votre page ressemble à ceci :

https://res03.sites.3wa.io/assets/files/php/j16/maquette-about.png

Sur votre page À propos, dites lui (en haut à droite) qu'au lieu du modèle de page par défaut, elle prend le modèle "À propos".


## Étape 21 : à vous de jouer

Créez des champs avec ACF et ajouter des fonctions à `functions.php` et `template-about.php` pour rendez votre page À propos dynamique.