<?php

class Commande {
    private int $numeroCommande;
    private array $platsCommandes;
    private string $statut;
    private float $tva; // Taux de TVA

    // Constructeur
    public function __construct(int $numeroCommande) {
        $this->numeroCommande = $numeroCommande;
        $this->platsCommandes = [];
        $this->statut = "en cours"; // Par défaut, la commande est "en cours"
        $this->tva = 0.2; // TVA à 20%
    }

    // Getters (Assesseurs)
    public function getNumeroCommande(): int {
        return $this->numeroCommande;
    }

    public function getStatut(): string {
        return $this->statut;
    }

    // Setters avec contrôle
    public function setStatut(string $statut): void {
        $statutsValides = ["en cours", "terminée", "annulée"];
        if (in_array($statut, $statutsValides)) {
            $this->statut = $statut;
        } else {
            echo "Statut invalide ! Veuillez choisir entre 'en cours', 'terminée' ou 'annulée'.\n";
        }
    }

    // Ajouter un plat à la commande
    public function ajouterPlat(string $nom, float $prix, int $quantite = 1): void {
        if ($quantite <= 0 || $prix <= 0) {
            echo "Erreur : La quantité et le prix doivent être positifs.\n";
            return;
        }

        if (isset($this->platsCommandes[$nom])) {
            $this->platsCommandes[$nom]['quantite'] += $quantite;
        } else {
            $this->platsCommandes[$nom] = [
                "prix" => $prix,
                "quantite" => $quantite
            ];
        }
    }

    // Annuler une commande
    public function annulerCommande(): void {
        $this->statut = "annulée";
        $this->platsCommandes = [];
        echo "La commande #{$this->numeroCommande} a été annulée.\n";
    }

    // Méthode privée pour calculer le total HT
    private function calculerTotal(): float {
        $total = 0;
        foreach ($this->platsCommandes as $plat) {
            $total += $plat["prix"] * $plat["quantite"];
        }
        return $total;
    }

    // Calculer le total TTC avec la TVA
    public function calculerTVA(): float {
        return $this->calculerTotal() * (1 + $this->tva);
    }

    // Afficher la commande avec son total
    public function afficherCommande(): void {
        echo "🧾 Commande #{$this->numeroCommande}\n";
        echo "Statut : {$this->statut}\n";

        if (empty($this->platsCommandes)) {
            echo "Aucun plat commandé.\n";
            return;
        }

        echo "📜 Plats commandés :\n";
        foreach ($this->platsCommandes as $nom => $details) {
            echo "- {$nom} : {$details['quantite']} x {$details['prix']}€\n";
        }

        echo "💰 Total HT : " . number_format($this->calculerTotal(), 2) . "€\n";
        echo "💶 Total TTC (TVA 20%) : " . number_format($this->calculerTVA(), 2) . "€\n";
    }
}

// ---- TESTS ----
$commande = new Commande(102);

// Ajout de plats
$commande->ajouterPlat("Pizza", 12.50, 2);
$commande->ajouterPlat("Burger", 8.90, 1);
$commande->ajouterPlat("Soda", 2.50, 3);

// Affichage de la commande
$commande->afficherCommande();

// Annulation de la commande
$commande->annulerCommande();

// Tentative d'affichage après annulation
$commande->afficherCommande();
?>
