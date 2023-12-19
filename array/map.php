<div class="titulo">Mapa</div>

<?php
$dados = array("nome" => "Raul", "peso" => 105, "raça" => "pardo", "altura" => 1.85);

echo "Dados: <br>";
echo $dados["nome"] . "<br>";
echo $dados["peso"] . "<br>";
echo $dados["raça"] . "<br>";
echo $dados["altura"] . "<br>";
print_r($dados);

$dados = array(
    "nome" => "Gustavo",
    "peso" => 80,
    "raça" => "branco",
    "altura" => 1.65
);

echo "<br><br>Dados: <br>";
echo $dados["nome"] . "<br>";
echo $dados["peso"] . "<br>";
echo $dados["raça"] . "<br>";
echo $dados["altura"] . "<br>";
print_r($dados);

?>