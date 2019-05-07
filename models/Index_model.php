<?php

class Index_model extends Model {

    function __construct() {
        parent::__construct();
        
    }
    
    public function Calc($a = 3, $b = 2){
        return $a + $b;
    }

}
