<?php

$produits = [
    "Burger" => 10.99,
    "Frites" => 3.50,
    "Boisson" => 1.50,
    "Sauce" => 0.99
];

echo "Facture : <br>";
foreach ($produits as $nom => $prix) {
    echo $nom . " : " . $prix . " €<br>";
}
$total = array_sum($produits);
echo "Total : " . $total . " €";

?>