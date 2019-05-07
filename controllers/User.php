<?php

class User extends Controller{
    function __construct(){
        parent::__construct();
        $this -> view -> controller = "User";
        $this -> view -> Render();
    }
}
