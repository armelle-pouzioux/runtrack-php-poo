<?php

class Cercle{
    public $rayon;

    public function __construct($rayon){
        $this->rayon=$rayon;
    }

    public function changerRayon($changerRayon){
        $this->rayon = $changerRayon ;
    }

    public function circonference(){
        return 2 * pi() * $this->rayon;
    }

    public function aire(){
        return pi() * pow($this->rayon, 2);
    }

    public function diametre(){
        return 2 * $this->rayon;
    }

    public function afficherInfos(){
        echo "Cercle de rayon : " . $this->rayon . " unités<br>";
        echo "Diamètre : " . $this->diametre() . " unités<br>";
        echo "Circonférence : " . $this->circonference() . " unités<br>";
        echo "Aire : " . $this->aire() . " unités carrées<br>";
        echo "----------------------------------------------<br>";
    }
}

$cercle1 = new Cercle(4);
$cercle2 = new Cercle (7);

$cercle1->afficherInfos();
$cercle2->afficherInfos();

?>