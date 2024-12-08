<?php

$start = 1;
$increment = 3;
$terms = 10;

echo "<h2>Sequence: </h2>";
$current = $start;
$count = 0;

do{
    echo $current . " ";
    $current += $increment;
    $count++;
} while($count < $terms);

?>