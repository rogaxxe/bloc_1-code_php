<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";
$nom = $_GET["nom"];
echo "Paramètre nom : " . $nom;