<?php

class Livre{
    private $titre;
    private $auteur;
    private $nbpages;

    public function __construct($titre, $auteur, $nbpages){
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nbpages = (int) $nbpages;
    }

    public function getTitre(){
        return $this->titre;
    }

    public function getAuteur(){
        return $this->auteur;
    }

    public function getNbpages(){
        return $this->nbpages;
    }

    public function getLivre(){
        echo "📖 Titre : " . $this->titre . "<br>";
        echo "✍ Auteur : " . $this->auteur . "<br>";
        echo "📄 Nombre de pages : " . $this->nbpages . "<br>";
        echo "----------------------------------------<br>";
    }

    public function setTitre($newTitre){
        return $this->titre = $newTitre;
    }

    public function setAuteur($newAuteur){
        return $this->auteur = $newAuteur;
    }

    public function setNbpages($newNbpages) {
        if (is_numeric($newNbpages) && $newNbpages > 0) { // Vérifie que c'est un nombre positif
            $this->nbpages = (int) $newNbpages;
        } else {
            echo "Erreur : Le nombre de pages doit être un entier positif.<br>";
        }
    }
}

$myLivre = new Livre ("Scum","Valérie Solanas","1000");

$myLivre -> getLivre();

$myLivre->setTitre("Les chiennes savantes");
$myLivre->setAuteur("Virginie Despentes");
$myLivre->setNbpages("500");

$myLivre -> getLivre();

?>