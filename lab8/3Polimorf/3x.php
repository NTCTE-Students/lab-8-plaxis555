<?php

interface Document {
    public function save($smth);
}

class PDFDocument implements Document {
    public function save($smth) {
        print("Saving {$smth} as PDF document<br>");
    }
}

class WordDocument implements Document {
    public function save($smth) {
        print("Saving {$smth} as Word document<br>");
    }
}

class ExcelDocument implements Document {
    public function save($smth) {
        print("Saving {$smth} as Excel document<br>");
    }
}