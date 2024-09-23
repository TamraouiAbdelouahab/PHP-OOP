<?php 

class Livre {
    private $titre;
    private $isbn;
    private $auteur; // Un tableau d'objets Auteur
    public function __construct($titre,$isbn)
    {
        $this->titre = $titre;
        $this->isbn = $isbn;
    }
    public function setAuteur(Auteur $auteur)
    {
        $this->auteur = $auteur;
    }
    public function getAuteur():Auteur
    {
        return $this->auteur;
    }
    public function getTitre():string
    {
        return $this->titre;
    }
    public function getIsbn():string
    {
        return $this->isbn;
    }
    public function Display():string{
        return "Titre :" . $this->titre . ", ISBN : " . $this->isbn . "\n" . "Auteur : \n" . $this->auteur->Display() ;
    }
}

class Auteur {
    private $nom;
    private $prenom;
    public function __construct($nom,$prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    public function getnom():string
    {
        return $this->nom;
    }
    public function getprenom():string
    {
        return $this->prenom;
    }
    public function Display():string{
        return "nom : " . $this->nom .", prenom : ". $this->prenom;
    }
    
}




?>