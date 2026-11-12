<?php
$nom = $_GET["nom"] ?? "";
echo "Détail de : " . htmlspecialchars($nom);