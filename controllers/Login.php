<?php

 class Login extends Controller{
     function __construct($params){
         parent::__construct();
         
         $this -> view -> controller = "Login";
         $countElementsOfArray = count($params);
         if($countElementsOfArray > 1) $this -> Redirect();
         $this -> LoginView();
        
     }
     private function LoginView(){
         
         $this -> view -> Render();
             
     }
     
     private function Redirect(){
         header("Location: /mvc/login");
     }
 }

