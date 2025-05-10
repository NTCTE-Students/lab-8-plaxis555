<?php

interface Database {
    public function connect($smth1);
    public function query();
}

class MySQLDatabase implements Database {
    public $database;

    public function connect($smth1) {
        $this -> database = $smth1;
        print("Connecting to {$this->database}<br>");
    }

    public function query() {
        print("Making query to {$this->database}<br>");
    }
}

class PostgreSQLDatabase implements Database {
    public $database;

    public function connect($smth1) {
        $this -> database = $smth1;
        print("Connecting to {$this->database}<br>");
    }

    public function query() {
        print("Making query to {$this->database}<br>");
    }
}

class SQLiteDatabase implements Database {
    public $database;

    public function connect($smth1) {
        $this -> database = $smth1;
        print("Connecting to {$this->database}<br>");
    }

    public function query() {
        print("Making query to {$this->database}<br>");
    }
}