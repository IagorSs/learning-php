<?php

for ($i=0; $i < 10; $i++) { 
    echo $i;
}
echo '<hr>';

$array = ["a", "b", 334];
for ($i=0; $i < count($array); $i++) { 
    echo $array[$i];
}
echo '<br>';

foreach ($array as $value) {
    echo $value ."";
}
echo '<br>';

foreach ($array as $key => $value) {
    echo $key ."". $value ."";
}
echo '<br>';
