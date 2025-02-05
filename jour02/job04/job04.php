<?php

class Student{
    private string $nom;
    private string $prenom;
    private int $numEtudiant;
    private int $credits;

    public function __construct($nom, $prenom, $numEtudiant){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numEtudiant = $numEtudiant;
        $this->credits = 0;  
    }

    public function addCredits(int $creditsAjoutes){
        if ($creditsAjoutes > 0){
            $this->credits += $creditsAjoutes;
        }else{
            echo "Erreur, le nombre de crédits ajoutés doit être supérieur à 0.<br>";
        }
    }


    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getNumEtudiant(){
        return $this->numEtudiant;
    }

    public function getCredits(){
        return $this->credits;
    }


    public function afficherInfos(): void {
        echo "🎓 Étudiant : " . $this->prenom . " " . $this->nom . "<br>";
        echo "🆔 Numéro étudiant : " . $this->numEtudiant . "<br>";
        echo "📚 Crédits : " . $this->credits . "<br>";
        echo "----------------------------------------<br>";
    }
}

    // Exemple d'utilisation :
$etudiant = new Student("Doe", "John", "123456");
$etudiant->afficherInfos();

$etudiant->addCredits(10);
$etudiant->afficherInfos();

$etudiant->addCredits(-5); // Tentative invalide
$etudiant->afficherInfos();

?>
