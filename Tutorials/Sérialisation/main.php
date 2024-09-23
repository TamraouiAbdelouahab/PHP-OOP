<?php
include "class.php";
$livre1 = new Livre("Le Petit Prince","9782266000016");
$livre1->setAuteur(new Auteur("Saint-Exupery", "Antoine"));

// echo $livre1->display();
$json = json_encode(
    [$livre1->getTitre(),$livre1->getIsbn(),$livre1->getAuteur()->getnom(),$livre1->getAuteur()->getprenom()],
     JSON_PRETTY_PRINT);
echo $json;



?>