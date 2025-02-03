<?php

class Point{
    public $x;
    public $y;

    public function __construct($x = 3, $y = 7) {
        $this->x = $x;
        $this->y = $y;
    }

    public function afficherLesPoints(){
        echo "Coordonnées des point :(" .$this->x ."," .$this->y .")<br>";
    }

    public function afficherX(){
        echo "Valeur de X :" .$this->x ."<br>";
    }

    public function afficherY(){
        echo "Valeur de Y :" .$this->y ."<br>";
    }

    public function changerX($nouveauX){
        $this->x = $nouveauX;
    }

    public function changerY($nouveauY){
        $this->y = $nouveauY;
    }

}

    // Instanciation d'un point avec des valeurs initiales
$point1 = new Point(3, 5);

// Affichage des coordonnées initiales
$point1->afficherLesPoints();

// Affichage séparé des valeurs de X et Y
$point1->afficherX();
$point1->afficherY();

// Modification des coordonnées
$point1->changerX(10);
$point1->changerY(15);

// Affichage des nouvelles coordonnées après modification
$point1->afficherLesPoints();

?>