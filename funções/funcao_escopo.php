<div class="titulo">Função e Escopo</div>

<?php

function printMensage(){
    echo "Olá!";
    echo " Até a próxima!";
}

printMensage();

$valor = 1;
$kg = 10;

function trocavalor(){
    global $valor, $kg;
    $valor = 3;
    $kg = 5;
    return 10;
}

trocavalor();
echo "<br>" . $valor;
echo "<br>" . $kg;
var_dump(trocavalor());



?>