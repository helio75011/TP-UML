<?php

class Impot {
    const TAUX_FAIBLE = 0.15; // 15%
    const TAUX_FORT = 0.20;   // 20%
    const SEUIL = 15000;      // 15 000 euros

    private $nom;
    private $revenu;

    public function __construct($nom, $revenu) {
        $this->nom = $nom;
        $this->revenu = $revenu;
    }

    public function CalculeImpot() {
        if ($this->revenu <= self::SEUIL) {
            return $this->revenu * self::TAUX_FAIBLE;
        } else {
            return $this->revenu * self::TAUX_FORT;
        }
    }

    public function AfficheImpot() {
        $montant = $this->CalculeImpot();
        return "Mr/Mme {$this->nom}, votre impôt est de {$montant} euros.";
    }
}

?>