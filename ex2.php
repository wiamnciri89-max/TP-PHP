<?php
$prix = 120;

if ($prix < 50) {
    $prixReduit = $prix;
    echo "Aucune réduction\n";
} 
elseif ($prix >= 50 && $prix <= 100) {
    $prixReduit = $prix - ($prix * 0.05);
    echo "Réduction de 5%\n";
}
else {
    $prixReduit = $prix - ($prix * 0.10);
    echo "Réduction de 10%\n";
}
echo "Prix après réduction : " . $prixReduit . "€\n" ;

?>