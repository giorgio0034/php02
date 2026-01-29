<?php



$numeri = [3, 6, 8, 11, 14, 7, 10];

$somma = 0;
$contatore = 0;

foreach ($numeri as $numero) {
    if ($numero % 2 == 0) {
        $somma += $numero;
        $contatore++;
    }
}

if ($contatore > 0) {
    $media = $somma / $contatore;
    echo "La media dei numeri pari è: " . $media;
} else {
    echo "Non ci sono numeri pari nell'array.";
}

?>













?>