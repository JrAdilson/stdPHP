<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Alaska',
        'saldo' => 10000
    ],
    24438924284 => [
        'titular' => 'Milena',
        'saldo' => 10
    ],
    99999999998 => [
        'titular' => 'Junior',
        'saldo' => 1
    ]
];
$contasCorrentes[] = [
    'titular' => 'Minuska',
    'saldo' => 150
];
// AutoIncrementa.
foreach($contasCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}