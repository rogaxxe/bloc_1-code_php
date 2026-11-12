<?php
declare(strict_types=1);
function calculerCoutAnnuel(float $coutMensuel): float
{
    return $coutMensuel * 12;
}
$coutServeur = calculerCoutAnnuel(24.90);
echo "Coût annuel : " . $coutServeur . " euros <br/>";

function calculerTauxOccupation(float $espaceUtilise, float $capacite): float
{
    return $espaceUtilise / $capacite * 100;
}

$espaceUtilise = calculerTauxOccupation(360,500);
echo "Cout:" .$espaceUtilise . " taux occupation";

function estChargeCritique(float $chargeCpu): bool
{
    return $chargeCpu >= 90;
}

if(estChargeCritique(50))
    echo "<br/> probleme" ;
else echo "<br/> ok ";