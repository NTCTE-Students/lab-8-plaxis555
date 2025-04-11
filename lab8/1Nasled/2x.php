<?php

class Employee {
    public $name;
    public $salary;
    public function __construct($name, $salary) {
        $this -> name = $name;
        $this -> salary = $salary;
    }

    public function getInfo() {
        return "{$this->name} {$this->salary}";
    }
}

class Manager extends Employee {
    public $manageTeam;

    public function __construct($name, $salary, $manageTeam) {
        parent::__construct($name, $salary);
        $this -> manageTeam = $manageTeam;
    }
}

class Developer extends Employee {
    public $manageTeam;

    public function __construct($name, $salary) {
        parent::__construct($name, $salary);
    }
}

class Designer extends Employee {
    public $writeCode;

    public function __construct($name, $salary, $writeCode) {
        parent::__construct($name, $salary);
        $this -> writeCode = $writeCode;
    }
}