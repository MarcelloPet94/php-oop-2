<?php

require_once __DIR__.'./Sala.php';

class Effect extends Sala {
    
    public $effetti;

    function __construct($_nome, $_display, $_posti, $_effetti = []) {
        parent::__construct($_nome, $_display, $_posti);
        $this->effetti = $_effetti;
    }   

}
