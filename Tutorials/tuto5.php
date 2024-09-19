<?php
class Personne {
    private $id;
    private $nom;
    private $passeport; 

    public function __construct($id, $nom) {
        $this->id = $id;
        $this->nom = $nom;
    }
    public function setPasseport(Passeport $passeport): void {
        $this->passeport = $passeport;
        $passeport->setPersonne($this);
    }
    public function getPasseport():string{
        return $this->passeport->display();
    }
    // display Personne object 
    public function display(): string {
        return "id : ". $this->id ."\nnom : ". $this->nom;
    }
}

class Passeport {
    private $numero;
    private $dateExpiration;
    private $personne;

    public function __construct($numero, $dateExpiration) {
        $this->numero = $numero;
        $this->dateExpiration = $dateExpiration;
    }
    // display Passport object 
    public function display(): string {
        return "numero : ". $this->numero ."\ndateExpiration : ". $this->dateExpiration;
    }
    public function setPersonne(Personne $personne): void {
        $this->personne = $personne;
    }
}

$personne = new Personne(1,"Tamraoui");
$passport = new Passeport(900321,"2023-12-10");
$personne->setPasseport($passport);
echo $personne->getPasseport();
$personne->display();
$personne = new Personne(2,"Ahmaed");
$passport = new Passeport(9003231,"2024-03-18");








?>