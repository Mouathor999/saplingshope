<?php

namespace App;
class Cart {
    public $items = null;
    public $totalQty = 0;
    public function __construct($oldCart)
    {
        if($oldCart)
        {
            $this ->items = $oldCart->items;
            $this ->totalQty = $oldCart->totalQty;
        }
    }
    public function add($item, $qauntity , $id){
        $storeItem = ['qty'=>0,'price'=>$item->sale_price,'item'=>$item];
        if ($this->items){
            if(array_key_exists($id, $this->items)){
                $storeItem = $this->items[$id];
            }
        }
       $storeItem['qty'] += $qauntity;
        $storeItem['price']= $item->sale_price * $storeItem['qty'];
        $this->items[$id]=$storeItem;
        $this->totalQty++;
    }



}