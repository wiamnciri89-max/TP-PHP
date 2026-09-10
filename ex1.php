<?php
$produit = "Ordinateur portable";
$prixHT = 750;

define("TVA", 0.20);

$prixTTC = $prixHT + ($prixHT * TVA) ;

echo $produit;
echo "\n";
echo "prix HT : " .$prixHT ; " €\n";
echo "prix TTC : " .$prixTTC ; " €\n";

?>