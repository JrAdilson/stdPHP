<?php
function showMessage($message){
    echo $message . PHP_EOL;
};

function addTwo($x){
    return $x + 2;
}
$sete = addTwo(5);
echo $sete;
// exit();
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
if(500 > $contasCorrentes[12345678910]['saldo']){
    showMessage("Você não pode sacar!");
}else{
    $contasCorrentes[12345678910]['saldo'] -= 500;
}
if(500 > $contasCorrentes[24438924284]['saldo']){
    showMessage("Você não pode sacar!");
}else{
    $contasCorrentes[24438924284]['saldo'] -= 500;
}
if(500 > $contasCorrentes[99999999998]['saldo']){
    showMessage("Você não pode sacar!");
}else{
    $contasCorrentes[99999999998]['saldo'] -= 500;
}

// AutoIncrementa.
foreach($contasCorrentes as $cpf => $conta){
    showMessage($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}