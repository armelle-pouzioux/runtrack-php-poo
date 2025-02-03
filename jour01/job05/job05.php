<?php

class Animal{
    public $age;
    public $prenom;

    public function __construct($age = 0, $prenom = ""){
        $this->age = $age;
        $this->prenom = $prenom;   
    }

    public function vieillir(){
        echo "l'age de l'animal" . $this-> age ++ ."<br>" ;
    }


    public function nommer($prenom){
        $this->prenom = $prenom;
        echo "L'animal se nomme". $this->prenom. "<br>";
    }
}

$monAnimal = new Animal();

$monAnimal ->vieillir();
$monAnimal ->vieillir();
$monAnimal ->vieillir();

$monAnimal->nommer(" Luna");

$monAnimal->age=15;
$monAnimal->vieillir();
$monAnimal->vieillir();
?>