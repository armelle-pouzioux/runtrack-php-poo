<?php

class Rectangle{
    private float $longueur;
    private float $largeur;

    public function __construct(float $longueur,float $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function getLongueur(): float {
        return $this->longueur;
    }

    public function getLargeur(): float {
        return $this->largeur;
    }

    public function setLongueur(float $longueur): void {
        if ($longueur > 0) {
            $this->longueur = $longueur;
        } else {
            echo "Erreur : La longueur doit être positive.\n";
        }
    }

    public function setLargeur(float $largeur): void {
        if ($largeur > 0) {
            $this->largeur = $largeur;
        } else {
            echo "Erreur : La largeur doit être positive.\n";
        }
    }

    public function perimetre(): float {
        return 2 * ($this->longueur + $this->largeur);
    }

    public function surface(): float {
        return $this->longueur * $this->largeur;
    }
}

class Parallelepipede extends Rectangle{
    private float $hauteur;

    public function __construct(float $longueur, float $largeur, float $hauteur){
        parent::__construct($longueur,$largeur);
        $this->hauteur = $hauteur;
    }

    public function setHauteur(float $hauteur): void {
        if ($hauteur > 0) {
            $this->hauteur = $hauteur;
        } else {
            echo "Erreur : La hauteur doit être positive.\n";
        }
    }

    public function volume(): float {
        return $this->surface() * $this->hauteur;
    }
}

$rectangle = new Rectangle(10, 5);
echo "Périmètre du rectangle : " . $rectangle->perimetre() . " cm\n";
echo "<br>Surface du rectangle : " . $rectangle->surface() . " cm²\n";

// Instanciation du parallélépipède
$parallelepipede = new Parallelepipede(10, 5, 8);
echo "<br>Volume du parallélépipède : " . $parallelepipede->volume() . " cm³\n";

?>