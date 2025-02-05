<?php

class Student{
    private string $nom;
    private string $prenom;
    private int $numEtudiant;
    private int $credits;
    private string $level;

    public function __construct($nom, $prenom, $numEtudiant){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numEtudiant = $numEtudiant;
        $this->credits = 0;  
        $this->level=$this->studentEval();
    }

    public function addCredits(int $creditsAjoutes){
        if ($creditsAjoutes > 0){
            $this->credits += $creditsAjoutes;
            $this->level = $this->studentEval();
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

    public function getLevel(): string {
        return $this->level;
    }

    private function studentEval(): string {
        if ($this->credits >= 90) {
            return "Excellent";
        } elseif ($this->credits >= 80) {
            return "Très bien";
        } elseif ($this->credits >= 70) {
            return "Bien";
        } elseif ($this->credits >= 60) {
            return "Passable";
        } else {
            return "Insuffisant";
        }
    }


    public function afficherInfos(): void {
        echo "🎓 Étudiant : " . $this->prenom . " " . $this->nom . "<br>";
        echo "🆔 Numéro étudiant : " . $this->numEtudiant . "<br>";
        echo "📚 Crédits : " . $this->credits . "<br>";
        echo "📊 Niveau : " . $this->level . "<br>";
        echo "----------------------------------------<br>";
    }

    public function studentInfo(): void {
        $this->afficherInfos(); 
    }

}

    // Exemple d'utilisation :
$etudiant = new Student("Doe", "John", "145");
$etudiant->afficherInfos();

$etudiant->addCredits(10);
$etudiant->studentInfo(); // Affiche les informations après ajout de 10 crédits

$etudiant->addCredits(75);
$etudiant->studentInfo(); // Affiche les informations après ajout de 75 crédits

$etudiant->addCredits(10);
$etudiant->studentInfo(); // Affiche les informations après ajout de 10 crédits supplémentaires

$etudiant->addCredits(-5); // Tentative invalide
$etudiant->studentInfo(); // Affiche les informations (aucun changement)
?>
