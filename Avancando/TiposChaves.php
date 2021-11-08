<?php

$array = [
    1 => 'A',
    '1' => 'B',
    1.5 => 'C',
    true => 'D'
];

foreach ($array as $itemArray) {
    echo $itemArray . " | ";
}
