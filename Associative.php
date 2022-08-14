 <?php

 $conta1 = [
    'titular' => 'Milena',
    'saldo' => 10000
 ];
 $conta2 = [
    'titular' => 'Junior',
    'saldo' => 2
 ];
 $conta3 = [
    'titular' => 'Alaska',
    'saldo' => 924882
 ];
 $conta1['titular'];
 $contasCorrentes = [$conta1, $conta2, $conta3];
for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'];
    echo "\n ";
 }