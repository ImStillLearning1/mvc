<?php

class LoginIncorrectValidateForm extends Model {

    function __construct() {
        parent::__construct();
        
    }
    
    public function showErrorValidate(){
        $message = "<p>Niepoprawna nazwa użytkownika lub hasła</p>";
        return $message;
    }

}