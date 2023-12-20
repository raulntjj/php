<div class="titulo">Multidimensionais</div>

<?php
$dados = array(
    "pessoa 1" => array(
        "nome" => "Raul",
        "idade" => 20
    ),
    "pessoa 2" => array(
        "nome" => "Gustavo",
        "idade" => 21
    ),
    "pessoa 3" => array(
        "nome" => "Allan",
        "idade" => 23
    ),
);

print_r($dados);

echo "<br><br>" . $dados["pessoa 1"]["nome"];
echo "<br>" . $dados["pessoa 2"]["nome"];
echo "<br>" . $dados["pessoa 3"]["nome"];

$dados["pessoa 4"] = array("nome" => "Jonas", "idade" => "19");

echo "<br>" . $dados["pessoa 4"]["nome"];

$dados["pessoa 1"]["peso"] = 105;

echo "<br>" . $dados["pessoa 1"]["peso"];
echo "<br>" . $dados["pessoa 1"]["nome"];

echo "<br><br>";
print_r($dados);

?>