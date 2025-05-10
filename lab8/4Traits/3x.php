<?php

trait Validatable {
    public function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}

class RegistrationForm {
    use Validatable;
    
    public function validate($email) {
        return $this->validateEmail($email);
    }
}