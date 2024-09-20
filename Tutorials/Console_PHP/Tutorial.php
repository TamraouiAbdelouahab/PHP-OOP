<?php
// Récupération des deux nombres

$nombre1 = readline("Entrez le premier nombre : ");
while(!is_numeric($nombre1))
{
    echo "le nombre doit être number\n";
    $nombre1 = readline("Entrez le premier nombre : ");
}

$nombre2 = readline("Entrez le deuxième nombre : ");
while(!is_numeric($nombre2))
{
    echo "le nombre doit être number\n";
    $nombre2 = readline("Entrez le deuxième nombre : ");
}

// Récupération de l'opération
echo "Choisissez l'opération (+, -, *, /) : ";
$operation = readline("Operation : ");

// Calcul en fonction de l'opération
switch ($operation) {
    case "+":
        $resultat = $nombre1 + $nombre2;
        break;
    case "-":
        $resultat = $nombre1 - $nombre2;
        break;
    case "*":
        $resultat = $nombre1 * $nombre2;
        break;
    case "/":
        if ($nombre2 == 0) {
            echo "Division par zéro impossible !\n";
        } else {
            $resultat = $nombre1 / $nombre2;
        }
        break;
    default:
        echo "Opération invalide.\n";
}

// Affichage du résultat
if (isset($resultat)) {
    echo "Le résultat est : " . $resultat . "\n";
}

?>