<?php

class Operation {
    public $nombre1;
    public $nombre2;

    // Constructeur
    public function __construct($nombre1 = 4, $nombre2 = 5) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    // Méthode addition
    public function addition() {
        $resultat = $this->nombre1 + $this->nombre2; // On additionne nombre1 et nombre2
        echo "Le résultat de l'addition est : " . $resultat . "\n"; // On affiche le résultat
    }
}

$operation = new Operation();

$operation->addition()

?>