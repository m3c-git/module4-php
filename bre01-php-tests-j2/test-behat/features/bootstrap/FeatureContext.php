<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;

require "src/Catalogue.php";  
require "src/Basket.php";

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */

     private Catalogue $catalogue;
     private Basket $basket;
 
     public function __construct()
     {
         $this->catalogue = new Catalogue();
         $this->basket = new Basket($this->catalogue);
     }
     
    /**
    * @Given there is a :product, which costs :price
    */
    public function thereIsAWhichCosts($product, $price)
    {
        $this->catalogue->setProductPrice($product, floatval($price));
    }

    /**
    * @When I add the :product to the basket
    */
    public function iAddTheToTheBasket($product)
    {
        $this->basket->addProduct($product);
    }

    /**
    * @Then I should have :count product(s) in the basket
    */
    public function iShouldHaveProductsInTheBasket($count)
    {
        PHPUnit\Framework\Assert::assertCount(
            intval($count),
            $this->basket
        );
    }

    /**
    * @Then the overall basket price should be :price
    */
    public function theOverallBasketPriceShouldBe($price)
    {
        PHPUnit\Framework\Assert::assertSame(
            floatval($price),
            $this->basket->getTotalPrice()
        );
    }

}
