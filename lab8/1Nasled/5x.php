<?php

class Devices {
    public $brand;
    public $model;

    public function __construct($brand, $model) {
        $this -> brand = $brand;
        $this -> model = $model;
    }

    public function getInfo() {
        print("Brand: {$this->brand} Model: {$this->model}<br>");
    }
}

class Smartphone extends Devices {
    public $name;

    public function __construct($brand, $name, $model) {
        parent::__construct($brand, $model);
        $this -> name = $name;
    }

    public function getInfo() {
        print("Brand: {$this->brand} Name: {$this->name} Model: {$this->model}<br>");
    }

    public function call() {
        print("{$this->name} waiting for opposite side to recive a call...<br>");
    }
}

class Laptop extends Devices {
    public $name;

    public function __construct($brand, $name, $model) {
        parent::__construct($brand, $model);
        $this -> name = $name;
    }

    public function getInfo() {
        print("Brand: {$this->brand} Name: {$this->name} Model: {$this->model}<br>");
    }

    public function startApp() {
        print("{$this->name} started some app<br>");
    }
}

class Tablet extends Devices {
    public $name;

    public function __construct($brand, $name, $model) {
        parent::__construct($brand, $model);
        $this -> name = $name;
    }

    public function getInfo() {
        print("Brand: {$this->brand} Name: {$this->name} Model: {$this->model}<br>");
    }

    public function camera() {
        print("{$this->name} activated it camera<br>");
    }
}

