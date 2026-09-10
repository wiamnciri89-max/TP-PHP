<?php

$produits = [
    "Clavier" => 49.90,
    "Souris" => 29.90,
    "Écran" => 189.90,
    "Webcam" => 79.90
];

foreach ($produits as $cle => $valeur) {
    if ($valeur > 50) {
        echo "$cle : $valeur " . "€\n";
    }
}
echo "Nombre de produits : " . count($produits);
?>
