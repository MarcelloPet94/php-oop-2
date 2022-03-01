<?php

class Attore {
    public $nome;
    public $cognome;
    public $data;

    function __construct($_nome, $_cognome, $_data) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->data = $_data;
    }   
}