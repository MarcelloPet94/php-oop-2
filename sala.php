<?php

class sala {
    
    public $id;
    public $numeroPosti;

    function __construct($_id , $_numeroPosti) {
        $this->id = $_id;
        $this->numeroPosti = $_numeroPosti;
    }

    public function getId() {
        return $id;
    } 

    public function getNumeroPosti() {
        return $numeroPosti;
    }     

}
