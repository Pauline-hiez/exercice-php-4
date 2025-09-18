<?php

$prenoms = [ "Chandler", "Monica", "Ross", "Phoebe", "Chandler", "Rachel" ];
$prenom_a_remplacer = "Chandler";
$nouveau_prenom = "Joey";

foreach ($prenoms as &$prenom) {

    if ($prenom === $prenom_a_remplacer) {
        $prenom = $nouveau_prenom;
    }
}

unset($prenom);

foreach ($prenoms as $prenom) {
    echo $prenom . "<br>";
}
