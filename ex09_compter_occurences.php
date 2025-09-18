<?php

$prenoms = [ "Chandler", "Ross", "Phoebe", "Joey", "Rachel", "Chandler", "Ross", "Phoebe", "Joey", "Rachel", "Chandler", "Monica", "Ross", "Joey", "Rachel" ];
$occurences = [];

foreach ($prenoms as $prenom) {
    if (isset($occurences[$prenom])) {
        $occurences[$prenom]++;
    } else {
        $occurences[$prenom] = 1;
    }
}

foreach ($occurences as $prenom => $count) {
    echo $prenom . " : " . $count . "<br>";
}

?>