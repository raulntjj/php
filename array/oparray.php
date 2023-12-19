<div class="titulo">Operações com Arrays</div>

<?php
$dados1 = array(
    "nome" => "Raul",
    "peso" => 105,
);

$dados2 = array(
    "nome" => "joao",
    "raça" => "pardo",
    "altura" => 1.85
);

$dadosCompleto = $dados1 + $dados2;//Merge de array

print_r($dadosCompleto);

if(is_array($dados2))//Verifica se é array
    echo "<br> é um array";
else
    echo "<br> não é";

echo "<br>" . count($dadosCompleto);//Contador de elementos

echo "<br>" . "{$dadosCompleto['nome']}";//Interpolar direto do echo

unset($dadosCompleto["raça"]);//Remover dados do array
echo "<br>";
print_r($dadosCompleto);


$par = array(2, 4, 6);
$impar = array(1, 3, 5);
$all = array_merge($par, $impar);//Concatenar Array
echo "<br>";
print_r($all);

sort($all); //Ordena
echo "<br>";
print_r($all);

$all[] = 7;//Adc elementos no array
echo "<br>";
print_r($all);
?>

<h1>CHECK!</h1>