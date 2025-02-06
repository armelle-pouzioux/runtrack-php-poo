<?php

class Vehicule{
    public string $marque;
    public string $modele;
    public int $annee;
    public float $prix;

    public function __construct(string $marque, string $modele, int $annee, float $prix){
        $this->marque=$marque;
        $this->modele=$modele;
        $this->annee=$annee;
        $this->prix=$prix;
    }

    public function informationVehicule(){
        echo "Marque:".$this->marque."<br> Modèle:".$this->modele."<br>";
    }

    public function demarrer() {
        echo "Attention, je roule !<br>";
    }
}
    class Voiture extends Vehicule {
        private int $portes;
    
        public function __construct(string $marque, string $modele, int $annee, float $prix, int $portes = 4) {
            parent::__construct($marque, $modele, $annee, $prix);
            $this->portes = $portes;
        }
    
        public function informationsVehicule() {
            parent::informationVehicule();
            echo "Nombre de portes:".$this->portes."<br>";
        }

        public function demarrer() {
            echo "La voiture démarre en douceur !<br>";
        }
    }

    class Moto extends Vehicule {
        private int $roues;
    
        public function __construct(string $marque, string $modele, int $annee, float $prix, int $roues = 2) {
            parent::__construct($marque, $modele, $annee, $prix);
            $this->roues = $roues;
        }
    
        public function informationsVehicule() {
            parent::informationVehicule();
            echo "Nombre de roues: {$this->roues}<br>";
        }

        public function demarrer() {
            echo "La moto vrombit et démarre à toute allure !<br>";
        }
    }

    
    // Instanciation d'un objet Voiture
$maVoiture = new Voiture("Toyota", "Corolla", 2022, 25000);
$maVoiture->informationsVehicule();
$maVoiture->demarrer();

    // Instanciation d'un objet Moto
$maMoto = new Moto("Yamaha", "MT-07", 2023, 7500);
$maMoto->informationsVehicule();
$maMoto->demarrer();

    
?>
    
