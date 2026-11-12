<?php
$serveurs = ["srv-web-01", "srv-bdd-01", "srv fichiers 01"];
foreach ($serveurs as $serveur) {
    $valeurUrl = urlencode($serveur);
    $texte = htmlspecialchars($serveur);

    echo '<a href="detail.php?nom=' . $valeurUrl . '">' . $texte . '</a><br>';
}