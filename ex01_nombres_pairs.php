<?php

$tableau = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo "<ul>";
foreach ($tableau as $t) {
    if ($t % 2 === 0) { 
        echo "<li>$t</li>";
    }
}
echo "</ul>";

?>