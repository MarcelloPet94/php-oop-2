<?php

class multiEffect extends sala {
    public $effetti = [];

    function __construct ($_effetti){
        $this->effetti = $_effetti;
    }

    public function getEffetti() {
        return $effetti;
    }
}
