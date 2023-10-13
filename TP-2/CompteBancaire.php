<?php

class CompteBancaire {
    private $nom;
    private $solde;

    // Constructeur avec des valeurs par défaut
    public function __construct($nom = 'Dupont', $solde = 1000) {
        $this->nom = $nom;
        $this->solde = $solde;
    }

    // Méthode pour déposer une somme
    public function depot($somme) {
        $this->solde += $somme;
    }

    // Méthode pour retirer une somme
    public function retrait($somme) {
        $this->solde -= $somme; // Il faudrait normalement vérifier que le solde reste positif, mais je garde le code simple pour cette démo
    }

    // Méthode pour afficher les détails du compte
    public function affiche() {
        echo "Le solde du compte bancaire de " . $this->nom . " est de " . $this->solde . " euros.<br>";
    }
}

// Exemples d'utilisation
$compte1 = new CompteBancaire('Duchmol', 800);
$compte1->depot(350);
$compte1->retrait(200);
$compte1->affiche();

$compte2 = new CompteBancaire();
$compte2->depot(25);
$compte2->affiche();
