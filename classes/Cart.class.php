<?php

class Cart
{
    public $items = [];


    public function addProduct (Product $product, $quantity) {
        $p = clone $product;
        $this->items[$p->getName()] = ['product' => $p, 'quantity' => $quantity];
    }

    public function removeProduct ($product, $quantity) {
        $cartQuantity = $this->items[$product->getName()]['quantity'];
        $quantity = $cartQuantity - $quantity;

        if ($quantity <= 0) {
            unset ($this->items[$product->getName()]);
        } else {
           $this->items[$product->getName()]['quantity'] = $quantity;
        }

    }

}