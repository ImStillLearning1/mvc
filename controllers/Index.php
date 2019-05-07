<?php

class Index extends Controller{

    function __construct($params) {
        parent::__construct();
        
        $this -> view -> controller = "Index";
        $this -> view -> page = "News";
        require_once "models/Index_model.php";
        $this -> model = new Index_model();
        $action = "News";
        $todayPosts = "Today";
        $morningPosts = "Allday";
        if (isset($params[1])) $action = ucfirst($params[1]);
        if (isset($params[2])) $todayPosts = ucfirst($params[2]);
        if (isset($params[3])) $morningPosts = ucfirst($params[3]);
        $this -> $action($todayPosts,$morningPosts);
        
    }
    
    private function News($todayPosts,$morningPosts){
        
        $this -> view -> title =  "News!!! - ".$todayPosts." - ".$morningPosts. "</br>";
        
        $this -> view -> calc = $this -> model -> Calc()."</br>";
        
        $this -> view -> Render();
    }
    
    

}