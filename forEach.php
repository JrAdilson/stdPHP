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
    99999999999 => [
        'titular' => 'Junior',
        'saldo' => 1
    ]
];
foreach($contasCorrentes as $cpf => $conta){
    echo $cpf . PHP_EOL;
}