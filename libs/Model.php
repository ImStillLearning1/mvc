<?php

class Model {

    function __construct() {
        /* $this -> connect = new mysqli('localhost','MVCbaza','root','');
    if(mysqli_connect_errno() != 0){
        echo '<p>Połączenie z bazą nie może zostać nawiązane. Błąd: </p>'.mysqli_connect_error();
    }*/
    }
    
    public function Select($select = "*", $from = null, $where = null, $orderby = null, $limit = null){
        $query = "SELECT ". $select;
        if(from != null) $query .= " FROM ".$from;
        return $this -> connect -> exec($query);
    }

}

