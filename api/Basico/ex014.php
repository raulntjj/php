<div class="titulo">Variaveis</div>

<?php
$a = 'Opa';
$$a = 'Eita';

echo($a . "<br>" . $$a . "<br>");



$x = 'opa';
$opa = 'eita';
$eita = 'vish';

echo($x . "<br>" . $$x . "<br>" . $$$x);
?>