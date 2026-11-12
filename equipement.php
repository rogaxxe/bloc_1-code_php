<?php 
if (!isset($_GET["nom"])) {
    echo "Paramètre nom manquant";
    return;
}
$nomEquipement = trim($_GET["nom"]);
if ($nomEquipement === "") {
    echo "Le nom ne peut pas être vide";
    return;
}
echo "Équipement demandé : " . htmlspecialchars($nomEquipement);