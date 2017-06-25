<?php
namespace classes\cart;
use \classes\Product;
use \classes\GetInfoProduct;

class Cart
{ 
    public $userName;
    public $productList;
    public $sum;
  
    public function __construct($userName, $products) {
        $this->userName = $userName;
        foreach ($products as $value) {
            $this->productList[] = $value;
        }
    }

    public function printProduct() {
        var_dump($this->productList);
    } 
    public function deleteProduct($id) {
        unset($this->productList[$id]);
  } 

  public function getSum(Product $product) {
         $this->sum = $product->getTotalPrice();
        }
} 


