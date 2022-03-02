<?php

class Film {
    public $titolo;
    public $genere;
    public $durata;
    private $attori;

    function __construct($_titolo, $_genere, $_durata, $_attori = []) {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->durata = $_durata;
        $this->attori = $_attori;
    }   
    
}