<div class="titulo">Argumentos</div>

<?php
//Argumento Variavel
function somatotal(...$numeros){
    $soma = 0;
    foreach ($numeros as $num){
        $soma += $num;
    }
    return $soma;
}

$array = [10, 20, 30];
echo somatotal(...$array) . "<br>";

echo somatotal(10, 20, 30, 40) . "<br>";

function familia($pai, ...$filhos){
    echo "Pai: $pai <br>";
    if($filhos){
        foreach($filhos as $filho){
            echo "Filho: $filho <br>";
        }
    }
}

familia("Edil", "Raul", "Grazielle", "Allan");

//Argumetno padrao
function boasvindas($nome = "Senhor(a)", $sobrenome = "Cliente"){
    return "Bem vindo, $nome $sobrenome.";
}
echo "<br>";
echo boasvindas();
echo "<br>";
echo boasvindas("Raul", "De Oliveira");

?>