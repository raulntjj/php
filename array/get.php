<div class="titulo">$_GET</div>

<?php
print_r ($_GET);

$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$idade = $_GET['idade'];
echo "<br>" . $nome;
echo "<br>" . $sobrenome;
echo "<br>" . $idade;

?>