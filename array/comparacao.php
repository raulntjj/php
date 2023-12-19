<div class="titulo">Comparação entre Arrays</div>

<?php
$array1 = array("nome" => "Raul", "idade" => 21);
$array2 = array("nome" => "Raul", "idade" => 21);

var_dump($array1 == $array2);//Comparar Arrays (nada influencia)
var_dump($array1 === $array2);//Comparar Arrays Estritamente (tudo influencia, tem que ser exatamente igual)

$array2 = array("idade" => 21, "nome" => "Raul");
var_dump($array1 === $array3);//Comparar Arrays Estritamente (tudo influencia, tem que ser exatamente igual)
?>