<?php
namespace App;
class Cart{
    public $products = null;
    public $totalPrice = 1;
    public $totalQuanty = 0;
    
    public function __construct($cart){
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuanty = $cart->totalQuanty;
        }
    }
    
    public function AddCart($product,$id){
        $newProduct = ['quanty'=>0,'pr_price'=>$product->pr_price,'productinfo'=>$product];
        if( $this->products){
            if(array_key_exists($id, $this->products)){
                $newProduct = $this->products[$id];
            }
               
        }
        $newProduct['quanty']++;
        $newProduct['pr_price']=$newProduct['quanty']*$product->pr_price;
        $this->products[$id] =  $newProduct;
        $this->totalPrice += $product->pr_price;
        $this->totalQuanty++;
    }
    public function DeleItem($id){
        $this->totalQuanty -= $this->products[$id]['quanty'];
        $this->totalPrice -= $this->products[$id]['pr_price'];
        unset($this->products[$id]);
    }
    
}


?>