<?php
$idadeList = array(21,22,23,24,25,26);
// Menos verboso com os colchetes.
$newList = [1,2,3,4,5,6,7];
$newList[] = 9;
$firstInd = $newList[0];
echo $firstInd;
foreach($newList as $list){
    echo $list . PHP_EOL;
}
