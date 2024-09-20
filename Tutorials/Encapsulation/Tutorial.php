<?php 
class Utilisateur {
    private $nom;
    private $prenom;
    private $email;

    public function __construct($nom, $prenom, $email) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }
}

class CompteBancaire {
    private $solde;

    public function __construct($soldeInitial) {
        $this->solde = $soldeInitial;
    }

    public function getSolde() {
        return "Votre solde est ".$this->solde ."dh";
    }

    public function deposer($montant) {
        if ($montant > 0) {
            $this->solde += $montant;
        } else {
            echo "Le montant doit être positif.";
        }
    }

    public function retirer($montant) {
        if ($montant <= $this->solde) {
            $this->solde -= $montant;
        } else {
            echo "Solde insuffisant.";
        }
    }
}

$Compte = new CompteBancaire(220);
echo $Compte->getSolde();
$Compte->deposer(50);
$Compte->retirer(200);
echo "\n";
echo $Compte->getSolde();
?>