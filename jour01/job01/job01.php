<?php


// Définition de la classe Opération
class Operation{
    // Déclaration des attributs
    public $nombre1;
    public $nombre2;

    // Constructeur : appelé automatiquement quand on crée une instance
    public function __construct($nombre1 = 10, $nombre2 = 20){
        // On initialise les attributs avec les valeurs fournies
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }
}

// Création d'une instance de la classe Opérartion
$operation1 = new Operation(); //Utilise les valeur par defaut 10 et 20

//Affichage des attributs de l'instance
echo "Nombre 1 :". $operation1->nombre1 . "<br>"; //Affiche 10
echo "Nombre 2 :". $operation1->nombre2 . "<br>"; //Affiche 20

//Création d'une instance avec des valeurs personalisé

$operation2 = new Operation(5, 15);

echo "Nombre 1 (deuxième instance) : " . $operation2->nombre1 . "<br>"; // Affiche 5
echo "Nombre 2 (deuxième instance) : " . $operation2->nombre2 . "<br>"; // Affiche 15
?>