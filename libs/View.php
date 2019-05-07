<?php

class View {

    function __construct() {}
    
    public function Render(){
        
        require_once "views/Header.php";

        if(isset($this -> controller) && isset($this -> page)){
            $plik = 'views/'. $this -> controller.'/'.$this -> page.'.php';
            if(file_exists($plik)) require_once $plik;
        }
        else if(isset($this -> controller) && !isset($this -> page)){
             $plik = 'views/'. $this -> controller.'.php';
            if(file_exists($plik)) require_once $plik;
        }
        else{
            $this -> message = "Nie znaleziono pliku";
            require_once 'views/Error.php';
          
        }
        
    }
}