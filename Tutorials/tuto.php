<?php
class Voiture {
    public $marque;
    public $modele;
    public $couleur;

    public function demarrer() {
        echo "La voiture démarre.";
    }
    public function afficher():string {
        return "Marque: ". $this->marque . "\nModel: ".$this->modele ."\nCouleur: ".$this->couleur;
    }
}

// Création d'un objet Voiture
$maVoiture = new Voiture();
$maVoiture->marque = "Renault";
$maVoiture->modele = "Clio";
$maVoiture->couleur = "Bleu";

$maVoiture->demarrer();
echo "\n";  
echo $maVoiture->afficher();

?>