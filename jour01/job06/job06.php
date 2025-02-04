<?php

class Personnage{
    public $x;
    public $y;

    public function __construct($x, $y){
        $this->x=$x;
        $this->y=$y;
    }

    public function gauche(){
        $this->x--;
    }

    public function droite(){
        $this->x++;
    }

    public function haut(){
        $this->y--;
    }

    public function bas(){
        $this->y++;
    }


    // Méthode pour afficher la position actuelle du personnage
    public function position() {
        return "Position actuelle : x = " . $this->x . ", y = " . $this->y . "<br>";
    }

}
// Création d'un personnage à la position initiale (2, 2)
$personnage = new Personnage(2, 2);

// Affichage de la position initiale
echo $personnage->position(); // x = 2, y = 2

// Déplacements du personnage
$personnage->gauche();
$personnage->haut();
$personnage->droite();
$personnage->bas();

// Affichage de la nouvelle position après déplacements
echo $personnage->position(); // x = 3, y = 3
?>