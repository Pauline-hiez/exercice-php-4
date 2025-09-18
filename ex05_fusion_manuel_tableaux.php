<?php

// 1

$tableau1 = [1, 3, 5, 7, 9];
$tableau2 = [2, 4, 6, 8, 10];   
$fusion = $tableau1 + $tableau2;

print_r($fusion);

echo "<br>";

// 2

$fusion = [];
for ($i = 0; $i < count($tableau1); $i++) {
    $fusion[] = $tableau1[$i];
}
for ($i = 0; $i < count($tableau2); $i++) {
    $fusion[] = $tableau2[$i];
}
print_r($fusion);

?>

