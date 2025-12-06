<?php

function getFruits(): void {
    $fruits = [
        'maçã',
        'banana',
        'laranja',
        'uva',
        'pera'
    ];

    foreach ($fruits as $key => $fruit) {
        $currentId = $key + 1;

        echo "<option value='$currentId'>$fruit</option>";
    }
}
