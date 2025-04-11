<?php

interface Order {
    public function calculateTotal($num);
}

class OnlineOrder implements Order {
    public $product = 1000;
    public $discount = 0.9; // например, 10% скидка

    public function calculateTotal($num) {
        return $num * $this->product * $this->discount;
    }
}

class StoreOrder implements Order {
    public $product = 1000;

    public function calculateTotal($num) {
        return $num * $this->product;
    }
}

class TelephoneOrder implements Order {
    public $product = 1000;
    public $deliveryFee = 100; // например, стоимость доставки

    public function calculateTotal($num) {
        return $num * $this->product + $this->deliveryFee;
    }
}

