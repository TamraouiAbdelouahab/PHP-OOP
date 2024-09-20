<?php 

class Livre {
    private $titre;
    private $isbn;
    private $auteurs; // Un tableau d'objets Auteur
    public function __construct($titre,$isbn)
    {
        $this->titre = $titre;
        $this->isbn = $isbn;
    }
    public function getadd()
}

class Auteur {
    public $nom;
    public $prenom;
    public function __construct($nom,$prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
}




?>