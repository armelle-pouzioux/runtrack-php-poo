<?php
 
 class Rectangle{
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function getLongueur(){
        return $this->longueur;
    }

    public function getLargeur(){
        return $this->largeur;
    }

    public function setLongueur($newLongueur){
        $this->longueur = $newLongueur;
    }

    public function setLargeur($newLargeur){
        $this->largeur = $newLargeur;
    }
 }

 $monRectangle= new Rectangle (10,5);
 
 echo "La voiture fait ".$monRectangle->getLongueur()." de longueur, et ".$monRectangle->getLargeur()." de largeur.<br>";

 $monRectangle->setLongueur(90);
 $monRectangle->setLargeur(70);

 echo "La voiture fait ".$monRectangle->getLongueur()." de longueur, et ".$monRectangle->getLargeur()." de largeur.";

