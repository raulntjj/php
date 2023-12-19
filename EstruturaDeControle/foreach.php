<div class="titulo">Foreach</div>

<?php
$semana = array(
    1 => "Domingo",
    2 => "Segunda",
    3 => "Terça",
    4 => "Quarta",
    5 => "Quinta",
    6 => "Sexta",
    7 => "Sábado",
);

foreach($semana as $dia){
    echo $dia . "<br>";
}

echo "<br>";

foreach($semana as $index => $dia){
    echo $index . "=>" . $dia . "<br>";
}
?>