<?php

$personne = [
    "nom" => "White",
    "prenom" => "Walter",
    "ville" => "Albuquerque",
    "age" => null
];

if (isset($personne["nom"])) {
    echo "La clé 'nom' existe et n'est pas nulle.";
} else {
    echo "La clé 'nom' n'existe pas.";
}

echo "<br>";

if (isset($personne["age"])) {
    echo "La clé 'age' existe et n'est pas nulle.";
} else {
    echo "La clé 'age' n'existe pas.";
}

?>