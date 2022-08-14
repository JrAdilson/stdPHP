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
};

function maiuscTitular(array &$conta){
    $conta['titular'] = mb_strtoupper($conta['titular']);
}