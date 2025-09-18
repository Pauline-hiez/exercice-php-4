<?php

$tableau = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function inverserTableau($array) {
    $inverse = [];
    for ($i = count($array) - 1; $i >= 0; $i--) {
        $inverse[] = $array[$i];
    }
    return $inverse;
}

$tableauInverse = inverserTableau($tableau);

echo "<br>";

echo implode(". ", $tableauInverse) . "\n";

?>
