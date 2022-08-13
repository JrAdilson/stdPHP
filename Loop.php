<?php
$count = 1;
while($count <= 15){
    echo "#$count".PHP_EOL;
    $count += 1;
}
// Mesma utilidade:
for ($count = 1; $count <= 15; $count++){
    if($count != 13){
        break;
    }
    echo "#$count".PHP_EOL;
}