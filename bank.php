<?php
// include 'functions.php' precisa do arquivo mas nao é essencial, nesse caso como é obrigatório, usamos o require!;
require 'functions.php';
$sete = addTwo(5);
/* echo $sete;
exit(); */
$contasCorrentes = [
    12345678910 => [
        'titular' => 'Alaska',
        'saldo' => 100
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
// Sacando
maiuscTitular($contasCorrentes[99999999998]);
$contasCorrentes[24438924284] = saq($contasCorrentes[24438924284],1);
$contasCorrentes[12345678910] = saq($contasCorrentes[12345678910],1);
$contasCorrentes[99999999998] = saq($contasCorrentes[99999999998],1);
// Depositando
$contasCorrentes[24438924284] = deposit(
    $contasCorrentes[24438924284],
    400 
);
// AutoIncrementa.
foreach($contasCorrentes as $cpf => $conta){
    showMessage(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
};