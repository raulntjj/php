<div class="titulo">Strings</div>

<?php
    var_dump("Olá PHP!");

    #Concatenação
    echo '<br>' . 'Olá PHP!' . '<br>';

    #Funções
    echo '<br>' . strtoupper('maximizado');
    echo '<br>' . strtolower('minimizado');
    echo '<br>' . ucfirst('primeira letra');
    echo '<br>' . ucwords('todas palavras tem inicio maiúsculo');
    echo '<br>' . mb_strlen("Eu também", "utf-8");
    echo '<br>' . strlen('Qnts letras tem?');
    echo '<br>' . substr('Um pedaço do texto' , 3, 7) . '<br>';
    echo '<br>' . str_replace('Palmeiras', 'Cruzeiro', 'Eu sou fã do Palmeiras'); #Procura palmeiras e troca pro cruzeiro na teceira string

    echo("
    <br>echo strtoupper('maximizado');
    <br>echo strtolower('minimizado');
    <br>echo ucfirst('primeira letra');
    <br>echo ucwords('todas palavras tem inicio maiúsculo');
    <br>echo mb_strlen(Eu também, utf-8);
    <br>echo strlen('Qnts letras tem?');");


?>