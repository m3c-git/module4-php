<?php  
 
 class Basket implements \Countable{  
  
    
    private Catalogue $catalogue;  
    private array $products = [];

    public function __construct(Catalogue $catalogue)  
    {  
        $this->catalogue = $catalogue;  
    }

    public function addProduct(string $product)  
    {  
        $this->products[] = $product;  
    }
    
    public function count() :int  
    {  
        return count($this->products);  
    }

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
}