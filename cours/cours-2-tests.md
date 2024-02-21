---
theme: theme.json
author: Gaellan
date: Feb 21, 2024
paging: Page %d sur %d
---

# Les tests fonctionnels en PHP

## Utiliser Behat

## Les features

## Les scénarios

## TDD

---

# Utiliser Behat

## Installation

Behat peut être installé par le biais de composer.

Créez un dossier `test-behat`, puis placez-vous dans ce dossier.

Ensuite, installez behat :

```sh
composer require --dev behat/behat
```

## Tester une implémentation simple

Pour cet exercice guidé je reprend et adapte l'exemple de la documentation de Behat (https://docs.behat.org/en/latest/quick_start.html).

---

# Behat : créer une feature

Behat fonctionne en décrivant des fonctionnalités (*features*) dans un langage simpliste mais lisible par des profils pas exclusivement tech. Ce langage simpliste, qui n'est pas dépendant du langage d'implémentation est appelé Gherkin.

## Rédiger une feature

Notre feature va s'assurer que pour pouvoir choisir les produits qu'iel souhaite acheter notre user va pouvoir les ajouter à un panier. 

Avec Gherkin on pourait l'exprimer comme suit :

```gherkin
Feature: Product basket
  In order to buy products
  As a customer
  I need to be able to put interesting products into a basket
```

Nous avons ensuite quelques règles à préciser :

- la TVA est de 20%
- Les frais de livraison des paniers supérieurs ou égaux à 10$ sont de 3$
- Les frais de livraisons des paniers inférieurs à 10$ sont de 2$

Toujours en Gherkin, nous allons pouvoir l'écrire comme suit :

```gherkin
Feature: Product basket
  In order to buy products
  As a customer
  I need to be able to put interesting products into a basket

  Rules:
  - VAT is 20%
  - Delivery for basket starting 10$ is 3$
  - Delivery for basket under 10$ is 2$
```

---

# Behat : les scénarios de test

Pour préciser le comportement que vous souhaitez voir implémenté, vous allez rédiger des scénarios de tests :

- Si j'ajoute un produit unique qui vaut moins de 10$
- Si j'ajoute 2 produits uniques qui valent chacun moins de 10$
- Si j'ajoute un produit unique qui vaut plus de 10$
- Si j'ajoute plusieurs produits qui valent chacun plus de 10$

En Gherkin :

```gherkin
Feature: Product basket
  In order to buy products
  As a customer
  I need to be able to put interesting products into a basket

  Rules:
  - VAT is 20%
  - Delivery for basket under 10$ is 3$
  - Delivery for basket starting 10$ is 2$

  Scenario: Buying a single product under 10$
    Given there is a "Sith Lord Lightsaber", which costs 5
    When I add the "Sith Lord Lightsaber" to the basket
    Then I should have 1 product in the basket
    And the overall basket price should be 8.4

  Scenario: Buying two products under 10$
    Given there is a "Sith Lord Lightsaber", which costs 5
    And there is a "Jedi Lightsaber", which costs 5
    When I add the "Sith Lord Lightsaber" to the basket
    And I add the "Jedi Lightsaber" to the basket
    Then I should have 2 products in the basket
    And the overall basket price should be 15.6
```

---

# Behat : suite des scénarios

```gherkin
  Scenario: Buying a single product over 10$  
    Given there is a "Sith Lord Lightsaber", which costs 15  
    When I add the "Sith Lord Lightsaber" to the basket  
    Then I should have 1 product in the basket  
    And the overall basket price should be 21.6

  Scenario: Buying two products over 10$
    Given there is a "Sith Lord Lightsaber", which costs 10
    And there is a "Jedi Lightsaber", which costs 10
    When I add the "Sith Lord Lightsaber" to the basket
    And I add the "Jedi Lightsaber" to the basket
    Then I should have 2 products in the basket
    And the overall basket price should be 27.6
```

Vous avez votre première feature, qui a pu être défini avec des profils non techniques (chefs de projets, stratégistes commerciaux, etc etc). Vous avez donc des spécifications.

Commençons par stocker notre feature dans un fichier.

Créez un dossier `features` à la racine de votre projet puis stockez votre feature dans un fichier `features/basket.feature`.

---

# Behat : tester une feature

Nous allons nous placer dans le cas de figure où vous créez une nouvelle code base de toute pièce, aucun code existant sur cette fonctionnalité, vous démarrez from scratch.

## Initialiser la suite de tests

```sh
./vendor/bin/behat --init
```

Behat devrait vous avoir créé un dossier `features/bootstrap` et un fichier `features/bootstrap/FeatureContext.php`.

## Lancer les tests

```sh
./vendor/bin/behat
```

Behat devrait reconnaitre que vous avez 4 scénarios, tous indéfinis et 20 étapes, toutes indéfinies. Chez moi la fin de l'affichage terminal ressemble à ceci : 

```sh
4 scenarios (4 undefined)
20 steps (20 undefined)
```

Il propose ensuite de prégénérer mon contexte avec les étapes manquantes. Dites lui que vous souhaitez utiliser le contexte `FeatureContext` (option 1 chez moi).

Copiez ensuite le code qu'il vous propose dans votre classe `FeatureContext` (effacez le constructeur de la classe).

---

# FeatureContext.php

Votre classe `FeatureContext` devrait ressembler à ceci :

*features/bootstrap/FeatureContext.php*

```php
<?php  
  
use Behat\Behat\Context\Context;  
use Behat\Gherkin\Node\PyStringNode;  
use Behat\Gherkin\Node\TableNode;  
  
/**  
 * Defines application features from the specific context. */
class FeatureContext implements Context  
{  
    /**  
     * @Given there is a :arg1, which costs :arg2$     
     * 
     */    
    public function thereIsAWhichCosts($arg1, $arg2)  
    {  
        throw new PendingException();  
    }  
  
    /**  
     * @When I add the :arg1 to the basket     
     * 
     */    
    public function iAddTheToTheBasket($arg1)  
    {  
        throw new PendingException();  
    }  
  
    //.. 
```

---

# FeatureContext.php suite

```php
    /**  
     * @Then I should have :arg1 product in the basket     
     */    
    public function iShouldHaveProductInTheBasket($arg1)  
    {  
        throw new PendingException();  
    }  
  
    /**  
     * @Then the overall basket price should be :arg1$     
     */    
    public function theOverallBasketPriceShouldBe($arg1)  
    {  
        throw new PendingException();  
    }  
  
    /**  
     * @Then I should have :arg1 products in the basket     
     */    
    public function iShouldHaveProductsInTheBasket($arg1)  
    {  
        throw new PendingException();  
    }
} 
```

Vous avez maintenant les étapes de votre test définies. Si vous voulez éviter de devoir les recopier à la main dans votre fichier vous pouvez utiliser :

```sh
vendor/bin/behat --dry-run --append-snippets
```

Vérifiez que le code généré fait bien un `use` des `PendingException`. Si ça n'est pas le cas, ajoutez la ligne suivante : 

```php
use Behat\Behat\Tester\Exception\PendingException;
```

---

# Test Driven Development

Dans une approche TDD la rédaction du code est un peu différente d'une approche classique, en effet, nous rédigeons des tests puis seulement ensuite nous rédigeons du code pour satisfaire ces tests.

Nous allons donc commencer par rédiger les tests de notre classe `FeatureContext` sans nous soucier de ce qui a ou non (non dans notre cas) été implémenté.

## Le constructeur de FeatureContext

Commençons par la base : nous devrions avoir un catalogue de produits et un panier :

*features/bootstrap/FeatureContext.php*
```php
class FeatureContext implements Context  
{
    private Catalogue $catalogue;
    private Basket $basket;

    public function __construct()
    {
        $this->catalogue = new Catalogue();
        $this->basket = new Basket();
    }
    
}
```

---

# FeatureContext : prix des produits

Notre catalogue devrait contenir des produits, qui ont des prix.

Nous allons transformer le très générique :

```php
/**  
 * @Given there is a :arg1, which costs :arg2$ 
 */
public function thereIsAWhichCosts($arg1, $arg2)  
{  
    throw new PendingException();  
}
```

en

```php
/**
* @Given there is a :product, which costs :price$
*/
public function thereIsAWhichCostsPs($product, $price)
{
    $this->catalogue->setProductPrice($product, floatval($price));
}
```

---

# FeatureContext : ajouter un produit au panier

```php
/**  
 * @When I add the :arg1 to the basket 
 */
public function iAddTheToTheBasket($arg1)  
{  
    throw new PendingException();  
}
```

devient

```php
/**
* @When I add the :product to the basket
*/
public function iAddTheToTheBasket($product)
{
    $this->basket->addProduct($product);
}
```

---

# FeatureContext : vérifier le nombre de produits dans le panier

```php
/**  
 * @Then I should have :arg1 product in the basket 
 */
public function iShouldHaveProductInTheBasket($arg1)  
{  
    throw new PendingException();  
}
```

devient

```php
/**
* @Then I should have :count product(s) in the basket
*/
public function iShouldHaveProductsInTheBasket($count)
{
    PHPUnit_Framework_Assert::assertCount(
        intval($count),
        $this->basket
    );
}
```

---

# FeatureContext : vérifier le prix du panier

```php
/**  
 * @Then the overall basket price should be :arg1$ 
 */
public function theOverallBasketPriceShouldBe($arg1)  
{  
    throw new PendingException();  
}
```

devient

```php
/**
* @Then the overall basket price should be £:price
*/
public function theOverallBasketPriceShouldBePs($price)
{
    PHPUnit_Framework_Assert::assertSame(
        floatval($price),
        $this->basket->getTotalPrice()
    );
}
```

---

# FeatureContext : seconde vérification du nombre de produits

Nous supprimons 

```php
/**  
 * @Then I should have :arg1 products in the basket 
 */
public function iShouldHaveProductsInTheBasket($arg1)  
{  
    throw new PendingException();  
}
```

qui est devenu un doublon.

---

# Ajouter PHPUnit

Pour vérifier que quelque chose est vrai, nous allons utiliser l'outil d'assertion de PHPUnit (Behat n'en propose pas). Installons donc PHPUnit :

```sh
composer require --dev phpunit/phpunit
```

---

# Implémentation

Nous allons laisser Behat nous guider pour l'implémentation de notre solution en PHP.

Commençons par le faire tourner :

```sh
./vendor/bin/behat
```

Il nous renvoie des erreurs et c'est normal, nous appelons tout un tas de choses qui n'existent pas encore.

---

# Implémentation : créer les fichiers des classes

Créez un dossier `src` dans lequel vous allez créer deux fichiers :

src/Catalogue.php
```php
<?php  
  
class Catalogue {  
  
}
```

src/Basket.php
```php
<?php  
 
class Basket {  
  
}
```

récupérez ensuite ces classes dans votre `features/bootstrap/FeatureContext.php` :

```php
<?php  
  
use Behat\Behat\Context\Context;  
use Behat\Behat\Tester\Exception\PendingException;  
use Behat\Gherkin\Node\PyStringNode;  
use Behat\Gherkin\Node\TableNode;  
  
require "src/Catalogue.php";  
require "src/Basket.php";
```

Et faites tourner Behat : 

```sh
./vendor/bin/behat
```

Cette fois il nous signale que les scénarios échouent parce que les méthodes appelées sur nos classes sont manquantes.

---

# Contenus des classes : Catalogue

Dans nos test, nous appelons la méthode `Catalogue::setProductPrice(string $product, float $price)`.

Nous allons donc la créer.

*src/Catalogue.php*
```php
function setProductPrice(string $product, float $price) : void 
{  
      
}
```

Nous allons ajouter un attribut à notre classe qui sera un tableau associatif sous la forme `$prices[$product] = $price`.

*src/Catalogue.php*
```php
private array $prices = [];
```

et nous allons ensuite compléter notre méthode pour qu'elle ajoute à un produit et son prix à notre tableau :

*src/Catalogue.php*
```php
function setProductPrice(string $product, float $price) : void 
{  
    $this->prices[$product] = $price;  
}
```

et au passage nous allons ajouter un getter pour nos prix : 

*src/Catalogue.php*
```php
public function getProductPrice($product) : float
{
    return $this->prices[$product];
}
```

---

# Contenus des classes : Basket

Dans notre test, nous appelons la méthode `Basket::addProduct(string $product)`, nous appelons aussi la méthode `Basket::getTotalPrice()` et nous appelons une assertion (`assertCount`) qui nous dit implicitement que notre classe doit être `Countable`.

## Un Basket Countable

En PHP pour pouvoir utiliser `count` sur une classe celle-ci doit implémenter l'interface `Countable`, nous allons donc transformer notre classe `Basket` :

*src/Basket.php*
```php
class Basket implements \Countable{  
  
    public function count() :int  
    {  
          
    }  
}
```

## Ajouter un produit

Pour pouvoir ajouter un produit nous allons allons avoir besoin d'une liste de produits. Nous savons que nous ajoutons un produit par son nom, mais nous savons aussi que nous allons avoir besoin de son prix. Il pourrait donc être utile d'avoir le catalogue en référence dans notre classe pour faire le lien entre le nom du produit et son prix.

*src/Basket.php*
```php
private Catalogue $catalogue;  
  
public function __construct(Catalogue $catalogue)  
{  
    $this->catalogue = $catalogue;  
}
```

---

# Basket : suite

ensuite nous allons créer notre méthode `addProduct(string $product)` :

*src/Basket.php*
```php
public function addProduct(string $product)  
{  
    $this->products[] = $product;  
}
```

Nous pouvons aussi mettre à jour notre méthode `Basket::count()`

*src/Basket.php*
```php
public function count() :int  
{  
    return count($this->products);  
}
```

---

# Basket : suite

## Récupérer le prix total du panier

Nous savons que le prix total de notre panier est équivalent au prix de nos produits + la livraison + la TVA (dans la plupart des pays dont la France la TVA d'une livraison est la même que celle des produits livrés).

*src/Basket.php*
```php
public function getTotalPrice() : float  
{  
    $totalProductPrice = 0.0;
    
    foreach($this->products as $product)  
    {  
        $totalProductPrice += $this->catalogue->getProductPrice($product);  
    }  
      
    if($totalProductPrice < 10)  
    {  
        $shippingPrice = 2;  
    }  
    else  
    {  
        $shippingPrice = 3;  
    }  
  
    return round(($totalProductPrice + $shippingPrice) * 1.2, 2);  
}
```

---

# Basket : suite

## Appel au constructeur

Nous avons ajouté un argument au constructeur de la classe `Basket`, n'oubliez pas de répercuter ce changement dans votre `FeatureContext` :

*features/bootstrap/FeatureContext.php*
```php
public function __construct()  
{  
    $this->catalogue = new Catalogue();  
    $this->basket = new Basket($this->catalogue);  
}
```

## Tester

Nous avons normalement implémenté tout ce dont nous avions besoin.

Faites une nouvelle fois tourner Behat : 

```sh
./vendor/bin/behat
```

Tous vos tests devraient cette fois être validés :)
