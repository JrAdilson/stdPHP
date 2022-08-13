<?php
$alt = 1.80;
$peso = 100;
$imc = ($peso/($alt*$alt));
if($imc < 18.5){
    echo "Baixo peso";
}else if($imc >= 18.5 && $imc < 24.99){
    echo "Normal";
}else if($imc >= 25 && $imc < 29.99){
    echo "Sobrepeso";
}else{
    echo "Obesidade";
}