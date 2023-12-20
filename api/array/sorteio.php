<div class="titulo">Sorteio</div>

<?php
$nomes = array("Raul", "Gustavo", "Medina", "Jonas", "Bruno");
$index = array_rand($nomes);
echo "<h1 center>$nomes[$index]</h1>";

?>

<style>
    [center]{
        display: flex;
        justify-content: center;
    }
</style>