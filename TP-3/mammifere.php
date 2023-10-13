<?php

class Mammifere {
    protected $cri;
    protected $taille;
    protected $pattes;
    protected $couleurPelage;
    protected $sexe;
    protected $lieuHabitation;
    protected $chaineAlimentaire;

    public function manger() {
        echo "Je mange...\n";
    }

    public function crier() {
        echo $this->cri . "\n";
    }

    public function courir() {
        echo "Je cours...\n";
    }

    public function marcher() {
        echo "Je marche...\n";
    }
}

class Chat extends Mammifere {
    public function __construct() {
        $this->cri = "Miaou";
    }

    public function mordre() {
        echo "Je mords...\n";
    }

    public function chasser() {
        echo "Je chasse...\n";
    }
}

class Chien extends Mammifere {
    public function __construct() {
        $this->cri = "Ouaf";
    }

    public function mordre() {
        echo "Je mords...\n";
    }

    public function chasser() {
        echo "Je chasse...\n";
    }
}

class Poisson extends Mammifere {
    protected $nageoires;
    protected $couleurEcailles;

    public function nager() {
        echo "Je nage...\n";
    }
}

class PoissonRouge extends Poisson {
}

class Requin extends Poisson {
    public function chasser() {
        echo "Je chasse dans l'eau...\n";
    }
}

// Test des classes
$chat = new Chat();
$chat->crier();
$chat->chasser();

$chien = new Chien();
$chien->crier();
$chien->courir();

$requin = new Requin();
$requin->nager();
$requin->chasser();
?>
