<?php

class Livre{
    private string $titre;
    private string $auteur;
    private int $nbpages;
    private bool $disponible;

    public function __construct(string $titre, string $auteur, int $nbpages){
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nbpages = $nbpages;
        $this->disponible = true;
    }

    public function estDisponible():bool{
        return $this->disponible;
    }

    public function emprunter(): bool{
        if ($this->disponible){
            $this->disponible = false;
            return true;
        }
        return false;
    }

    public function retourner(): void{
        $this->disponible = true;
    }

    public function getTitre(): string{
        return $this->titre;
    }

    public function getAuteur(): string{
        return $this->auteur;
    }

    public function getNbpages(): int{
        return $this->nbpages;
    }

    public function getLivre(): void {
        echo "📖 Titre : " . $this->titre . "<br>";
        echo "✍ Auteur : " . $this->auteur . "<br>";
        echo "📄 Nombre de pages : " . $this->nbpages . "<br>";
        echo "🔄 Disponible : " . ($this->disponible ? "Oui" : "Non") . "<br>";
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

echo "📚 Tentative d'emprunt du livre : " . ($myLivre->emprunter() ? "Réussi" : "Échec") . "<br>";
$myLivre->getLivre();

echo "🔙 Retour du livre...<br>";
$myLivre->retourner();
$myLivre->getLivre();

?>