<?php

require_once __DIR__.'./classes/Attore.php';
require_once __DIR__.'./classes/Effect.php';
require_once __DIR__.'./classes/Film.php';
require_once __DIR__.'./classes/Sala.php';
require_once __DIR__.'./classes/Spettacolo.php';

$listaAttori = [];
$listaAttori[] = new Attore('Marco', 'Marchetti', 1994);
$listaAttori[] = new Attore('Paolo', 'Paolini', 1980);
$listaAttori[] = new Attore('Gianni', 'Giannini', 1986);

$tuttiFilm = [];
$tuttiFilm[] = new Film('Le ali della libertà', 'Drammatico', '2:16:41', $listaAttori);


$sale = [];
$tutteSale = [

    new Sala("A", "1:81:1", 100),
    new Sala("B", "1:81:1", 90),
    new Sala("C", "1:81:1", 120),
    new Sala("D", "1:81:1", 76)

];


$listaSpettacoli = [];
$spettacolo = new Spettacolo("20-03-2020", "19:30", $tuttiFilm, $tutteSale[1]);

$listaSpettacoli[] = $spettacolo;

var_dump($listaSpettacoli);