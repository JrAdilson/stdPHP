<?php
// Só consegue trabalhar com chaves: INT ou STRING -> se não irá converter para um desses dois tipos.
$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];
foreach ($array as $i){
    echo $i . PHP_EOL;
}