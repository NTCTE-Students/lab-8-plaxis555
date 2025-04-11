<?php
trait Timestampable {
    private $createdAt;
    private $updatedAt;

    public function setTimestamps() {
        $this->createdAt = date('Y-m-d H:i:s');
        $this->updatedAt = date('Y-m-d H:i:s');
    }
    
    public function getCreatedAt() {
        return $this->createdAt;
    }
}

class Post {
    use Timestampable;
    
    public function __construct() {
        $this->setTimestamps();
    }
}