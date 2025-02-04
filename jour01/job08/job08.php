<?php

class Produit {
    public $nom;
    public $prixHT;
    public $tva;

    public function __construct($nom, $prixHT, $tva) {
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->tva = $tva;
    }

    public function calculerPrixTTC() {
        return $this->prixHT * (1 + $this->tva);
    }

    public function setNom($nouveauNom) {
        $this->nom = $nouveauNom;
    }

    public function setPrixHT($nouveauPrixHT) {
        $this->prixHT = $nouveauPrixHT;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrixHT() {
        return $this->prixHT;
    }

    public function getTVA() {
        return $this->tva;
    }

    public function getPrixTTC() {
        return $this->calculerPrixTTC();
    }

    public function afficher() {
        return "Nom : " . $this->nom . "<br>" .
               "Prix HT : " . $this->prixHT . "€<br>" .
               "TVA : " . ($this->tva * 100) . "%<br>" .
               "Prix TTC : " . $this->calculerPrixTTC() . "€<br>";
    }
}

// Création de produits
$produit1 = new Produit("Ordinateur", 1000, 0.2);
$produit2 = new Produit("Téléphone", 800, 0.2);

// Affichage des informations initiales
echo "Produit 1 initial:<br>";
echo $produit1->afficher();
echo "<br>Produit 2 initial:<br>";
echo $produit2->afficher();

// Modification du nom et du prix des produits
$produit1->setNom("PC Gamer");
$produit1->setPrixHT(1200);

$produit2->setNom("Smartphone Pro");
$produit2->setPrixHT(900);

// Affichage des nouvelles informations après modification
echo "<br>Produit 1 après modification:<br>";
echo $produit1->afficher();
echo "<br>Produit 2 après modification:<br>";
echo $produit2->afficher();

?>