<?php
function showMessage($message){
    echo $message . PHP_EOL;
};

function addTwo($x){
    return $x + 2;
};

function saq(array $conta, float $valor): array{
    if($valor > $conta['saldo']){
        showMessage("Você não pode sacar!");
    }else{
        $conta['saldo'] -= $valor;
    }
    return $conta;
};

function deposit(array $conta, float $valor): array{
    if($valor > 0){
        $conta['saldo'] += $valor;
    }else{
        showMessage("OPS! Para depositar informe um valor maior que 0.");
    }
    return $conta;
}
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
$contasCorrentes[24438924284] = saq($contasCorrentes[24438924284],1);
$contasCorrentes[12345678910] = saq($contasCorrentes[12345678910],1);
$contasCorrentes[99999999998] = saq($contasCorrentes[99999999998],1);
// Depositando
$contasCorrentes[24438924284] = deposit(
    $contasCorrentes[24438924284],
    -400 
);
// AutoIncrementa.
foreach($contasCorrentes as $cpf => $conta){
    showMessage($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}