<?php

$typesAutorises = ["serveur", "poste"];
$type = $_GET["type"];

if (in_array($type, $typesAutorises, true)) {
    echo "Type inconnu";
}

echo "Type demandé : " . $type;
