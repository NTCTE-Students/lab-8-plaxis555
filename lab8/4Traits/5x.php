<?php
trait Authenticatable {
    public function login($user) {
        $_SESSION['user'] = $user;
    }
    
    public function logout() {
        unset($_SESSION['user']);
    }
}

class User {
    use Authenticatable;
}