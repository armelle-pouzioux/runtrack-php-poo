<?php

class Personne{
    public $nom;
    public $prenom;

    public function __construct($nom = "Doe", $prenom= "Joe "){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

     public function Sepresenter(){
        echo "Je suis ". $this->prenom . $this->nom."<br>";
     }
        
}

$personne1 = new Personne();
$personne2 = new Personne("Dupond", "Jean ");

echo $personne1->Sepresenter();
echo $personne2->Sepresenter();

?>
   

        
    
