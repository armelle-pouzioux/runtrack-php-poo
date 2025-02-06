<?php

abstract class Forme {
    abstract public function aire();
}


class Rectangle extends Forme {
    public int $largeur;
    public int $hauteur;

    
    public function __construct(int $largeur, int $hauteur) {
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    // Surcharge de la méthode aire() pour calculer l'aire du rectangle
    public function aire() {
        return $this->largeur * $this->hauteur;
    }
}

class Cercle extends Forme{
    public int $radius;

    public function __construct(int $radius){

        $this->radius=$radius;
    }
    
    public function aire(){
        return pi() * pow($this->radius, 2);
    }
}


// Instanciation d'un objet Rectangle
$rectangle = new Rectangle(5, 10);

// Affichage de l'aire du rectangle
echo "L'aire du rectangle est : " . $rectangle->aire(); // Affiche "L'aire du rectangle est : 50"

$cercle = new Cercle(7);
echo "<br>L'aire du cercle est : " . $cercle->aire() . "\n";
?>