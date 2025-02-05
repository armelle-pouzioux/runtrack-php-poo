<?php
// Classe Forme
class Forme {
    // Méthode aire() qui renvoie 0 par défaut
    public function aire() {
        return 0;
    }
}

// Classe Rectangle qui hérite de Forme
class Rectangle extends Forme {
    // Attributs de la classe Rectangle
    public $largeur;
    public $hauteur;

    // Constructeur pour initialiser les attributs
    public function __construct($largeur, $hauteur) {
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    // Surcharge de la méthode aire() pour calculer l'aire du rectangle
    public function aire() {
        return $this->largeur * $this->hauteur;
    }
}

// Instanciation d'un objet Rectangle
$rectangle = new Rectangle(5, 10);

// Affichage de l'aire du rectangle
echo "L'aire du rectangle est : " . $rectangle->aire(); // Affiche "L'aire du rectangle est : 50"
?>