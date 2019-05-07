<?php

class FormValidate extends Controller{

    function __construct($params) {
        parent::__construct();
        
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            
            
            
        }
        else{
            
            $this -> IncorrectValidate();      
        }       
    }
    
    private function IncorrectValidate(){
        
        require_once "models/LoginIncorrectValidateForm.php";
        $this -> model = new LoginIncorrectValidateForm();
        $_SESSION['message'] = $this -> model -> showErrorValidate();
        
        $this -> Redirect();
        
        
    }
    
    private function CorrectValidate(){
        
    }
    
    private function Redirect(){
        header("Location: /mvc/login");
    }
    

}