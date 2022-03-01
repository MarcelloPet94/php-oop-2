<?php

class Sala {
    public $nome;
    public $display;
    public $posti;
    
    function __construct($_nome, $_display, $_posti) {
        $this->nome = $_nome;
        $this->display = $_display;
        $this->posti = $_posti;
    }   
}
