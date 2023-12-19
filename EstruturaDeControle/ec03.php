<div class="titulo">Op ternario</div>

<?php
$idade = 20;
$status;

if($idade >= 18){
    $status = 'maior';
} else{
    $status = 'menorz';
}

echo ($status . "<br>");

$age = 30;
$stts = $age >= 18 ? 'de maior' : 'de menor';

echo ($stts . "<br>");

?>
