<?php
 class Personne{
    public int $age;

    public function __construct($age=14){
        $this->age=$age;  
    }

    public function afficherAge(){
       echo "La personne a".$this->age."ans<br>"; 
    }

    public function bonjour(){
        echo "Hello<br>";
    }

    public function modifierAge($newAge){
        $this->age = $newAge;
    }
 }

class Eleve extends Personne{
    public function allerEnCours(){
        echo "Je vais en cours<br>";
    }

    public function afficherAge(){
        echo "J'ai ". $this->age. " ans.<br>";
    }
}

class Professeur extends Personne{
    private string $matiereEnseignee;

    public function __construct($age, $matiereEnseignee){
        parent::__construct($age);
        $this->matiereEnseignee = $matiereEnseignee;
    }

    public function enseigner(){
        echo "Le cours de " . $this->matiereEnseignee ." va commencer<br>";
    }
}

$personne = new Personne();
$personne->bonjour();  
$personne->afficherAge();


$eleve = new Eleve();
$eleve->afficherAge(); 
$eleve->allerEnCours(); 

$professeur = new Professeur(45, "Mathématiques");
$professeur->enseigner();  
$professeur->afficherAge(); 

?>

