<?php

class Voiture{
    private string $marque;
    private string $modele;
    private int $annee;
    private int $km;
    private bool $enMarche;
    private int $reservoir;


    public function __construct($marque,$modele,$annee,$km,$reservoir=50){
        $this->marque=$marque;
        $this->modele=$modele;
        $this->annee=$annee;
        $this->km=$km;
        $this->enMarche=false;
        $this->reservoir=$reservoir;
    }

    public function getMarque(){
        return $this->marque;
    }

    public function getModele(){
        return $this->modele;
    }

    public function getAnnee(){
        return $this->annee;
    }

    public function getKm(){
        return $this->km;
    }

    public function getEnMarche(){
        return $this->enMarche;
    }

    public function getReservoir(){
        return $this->reservoir;
    }

    public function setMarque($marque){
        return $this->marque = $marque;
    }

    public function setModele($modele){
        return $this->modele = $modele;
    }

    public function setAnnee($annee){
        return $this->annee = $annee;
    }

    public function setKm($km){
        return $this->km = $km;
    }

    public function setReservoir($reservoir){
        $this->reservoir = $reservoir;
    }

    private function verifierPlein(){
        return $this->reservoir;
    }

    public function demarrer(){
        if ($this->verifierPlein() >5){
            $this->enMarche = true;
            echo "<br>La voiture demarre";
        } else {
            echo "<br>Le reservoir est trop bas pour demarrer la voiture";
        }
        
    }

    public function arreter(){
        $this->enMarche = false;
        echo "<br>La voiture est arrêtée";
    }

}

// Test de la classe
$voiture = new Voiture("Toyota", "Corolla", 2020, 30000);
echo "Réservoir avant démarrage: " . $voiture->getReservoir() . " litres\n";
$voiture->demarrer();
$voiture->arreter();

$voiture -> setReservoir(3);
$voiture->demarrer();
$voiture->arreter();
?>