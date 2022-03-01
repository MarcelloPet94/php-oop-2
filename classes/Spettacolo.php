<?php

class Spettacolo {
    public $data;
    public $ora;
    public $film;
    public $sala;

    function __construct($_data, $_ora, $_film = [] , $_sala = []) {
        $this->data = $_data;
        $this->ora = $_ora;
        $this->film = $_film;
        $this->sala = $_sala;
    }   

}