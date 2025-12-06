<?php

function sum($a, &$b): int {
    return $a + $b;
}

$b = 6.7;

echo sum(3, b: $b);