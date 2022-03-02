<?php

ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
error_reporting(E_ALL);

require_once __DIR__.'./classes/Attore.php';
require_once __DIR__.'./classes/Effect.php';
require_once __DIR__.'./classes/Film.php';
require_once __DIR__.'./classes/Sala.php';
require_once __DIR__.'./classes/Spettacolo.php';

$effetto = ['movimento'];
$multiEffetto = ['movimento','vapore','pioggia'];

$listaAttori = [];
$listaAttori = [

    new Attore('Morgan', 'Freeman', 1994),
    new Attore('Ellis Boyd', 'Redding', 1980),
    new Attore('Tim', 'Robbins', 1986)

];

$tuttiFilm = [];
$tuttiFilm = [
    
    new Film('Le ali della libertà', 'Drammatico', '2:16:41', $listaAttori),
    new Film('Donnie Darko', 'Strano', '1:53:00', $listaAttori)
    
];

$tutteSale = [

    new Effect("A", "1:81:1", 100),
    new Effect("B", "1:81:1", 90, $multiEffetto),
    new Effect("C", "1:81:1", 120),
    new Effect("D", "1:81:1", 76)
    
];

$listaSpettacoli = [
    
    new Spettacolo("20-03-2020", "16:00", $tuttiFilm[0], $tutteSale[1]),
    new Spettacolo("20-03-2020", "21:00", $tuttiFilm[1], $tutteSale[2]),
    new Spettacolo("20-03-2020", "00:00", $tuttiFilm[1], $tutteSale[3]),
    new Spettacolo("20-03-2020", "16:00", $tuttiFilm[0], $tutteSale[1]),
    new Spettacolo("20-03-2020", "21:00", $tuttiFilm[1], $tutteSale[2]),
    new Spettacolo("20-03-2020", "00:00", $tuttiFilm[1], $tutteSale[3]),    

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
</head>
<body>

<?php

/* 1 */

foreach ($tutteSale as $key => $sala) {
    echo '<h2>Nome sala: ' . $sala->nome . '</h2>';
    echo '<h2>Display: ' . $sala->display . '</h2>';
    echo '<h2>n.Posti: ' . $sala->posti . '</h2>';

    if($sala->effetti != null) {
        echo '<span> Effetti: </span>';
        foreach ($sala->effetti as $key => $effetto) {
            echo '<span>' . $effetto . '</span>' . ', ';
        }

    }
    echo '<hr>';
} 

/* 2 */

$vuoto = 0;
foreach ($tutteSale as $key => $posti) {
    $vuoto += $posti->posti;
}
echo '<h1>Totale posti cinema: ' . $vuoto . '<h1>';

/* 3 */

$totale = 0;
foreach ($listaSpettacoli as $key => $spettacolo) {
    
    if($spettacolo->data == "20-03-2020" && $spettacolo->film->titolo == 'Donnie Darko')
    {
        $totale++;
    }

}

echo '<h2>Totale spettacoli per ' . $tuttiFilm[1]->titolo . ': ' . $totale;

?>

</body>
</html>