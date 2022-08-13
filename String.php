<?php
$idade = 17;
$nome = 'Adilson';
$cel = 123456789;
$numPessoa = 1;
echo 'Olá, eu tenho '.$idade.' anos.'.PHP_EOL; // Semelhante ao \n
echo "Olá, meu nome é $nome, tenho $idade anos e meu numero de celular é $cel\n";
if($idade >= 18){
    echo "Você tem $idade anos, pode entrar tranquilamente.\n";
}else if($idade >= 16 && $numPessoa > 1){
    echo "Você tem $idade anos e está acompanhado, pode entrar\n";
}else{
    echo "Infelizmente você não tem a idade suficiente, só tem $idade anos ou volte com algum responsável.\n";
}
echo PHP_EOL;
echo "Adeus\n";

if($nome != 'Adilson'){
    echo 'Seu nome não é Adilson';
}else{
    echo 'Seu nome é Adilson';
}