<?php

class Material {
    public $title;
    public $author;

    public function __construct($title, $author) {
        $this -> title = $title;
        $this -> author = $author;
    }

    public function getMaterialInfo() {
        print("Title: {$this->title}, Author: {$this->author}<br>");
    }
}

class Book extends Material {
    public $pages;

    public function __construct($title, $author, $pages) {
        parent::__construct($title, $author);
        $this -> pages = $pages;
    }

    public function getMaterialInfo() {
        print("Title: {$this->title}, Author: {$this->author}, have {$this->pages}<br>");
    }
}

class Video extends Material {
    public $lenght;

    public function __construct($title, $author, $lenght) {
        parent::__construct($title, $author);
        $this -> lenght = $lenght;
    }

    public function getMaterialInfo() {
        print("Title: {$this->title}, Author: {$this->author}, is {$this->lenght} long<br>");
    }
}

class Article extends Material {
    public $artic;

    public function __construct($title, $author, $artic) {
        parent::__construct($title, $author);
        $this -> artic = $artic;
    }

    public function getMaterialInfo() {
        print("Title: {$this->title}, Author: {$this->author}, have these {$this->artic} artics<br>");
    }
}


