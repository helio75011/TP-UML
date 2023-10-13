<?php

require_once 'impot.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $revenu = $_POST["revenu"];

    $impot = new Impot($nom, $revenu);
    echo $impot->AfficheImpot();
}

?>

<a href="index.php">Retour</a>
