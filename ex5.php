<?php
function calculerTTC(float $prixHT): float {
    $prixTTC = $prixHT + ($prixHT * 0.2);
    return $prixTTC;
}

function calculerRemise(float $prix, float $remise): float {
    $prixRemise = $prix - ($prix * $remise);
    return $prixRemise;
}


echo calculerTTC(100) . "\n"; 
echo calculerRemise(200, 0.10);



?>