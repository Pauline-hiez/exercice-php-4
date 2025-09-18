<?php

$prenoms = [ "Chandler", "Monica", "Ross", "Phoebe", "Joey", "Rachel" ];
$prenom_a_supprimer = "Phoebe";

$nouveauTableau = [];

foreach ($prenoms as $prenom => $valeur) {

    if ($valeur !== $prenom_a_supprimer) {
        $nouveauTableau[] = $valeur;
    }
}

foreach ($nouveauTableau as $prenom) {
    echo $prenom . "<br>";
}

?>