<?php

interface Payment {
    public function process($num);
}

class CreditCardPayment implements Payment {
    public function process($num) {
        print("Оплата с помощью кредитной карты на сумму: {$num}<br>");
    }
}

class PayPalPayment implements Payment {
    public function process($num) {
        print("Оплата с помощью PayPal на сумму: {$num}<br>");
    }
}

class BankTransferPayment implements Payment {
    public function process($num) {
        print("Оплата с помощью перевода из другого банка на сумму: {$num}<br>");
    }
}