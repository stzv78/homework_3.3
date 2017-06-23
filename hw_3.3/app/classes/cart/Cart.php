<?php
namespace classes\cart;

class Cart
{ 
  
    public $products = array();

  
    public function addProduct($product) {
        foreach ($product  as $key => $value) {
            foreach ($value as $k => $val) {
                $this->products[] = $val;
            }
        }
    }

    public function printProduct() {
        var_dump($this->products);
  } 
}
