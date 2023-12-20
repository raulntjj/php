<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/ex.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>

    <nav class="navegacao">
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?>> Visualizar sem CSS</a>
        <a href="index.php"> Voltar</a>
    </nav>

    <main class="principal">
        <div class="conteudo">
            <?php
                //include("teste/teste.php");
                //include($_GET ['dir'] . "/" . $_GET ['file'] . ".php");
                include("{$_GET ['dir']}/{$_GET ['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
    <?= date('d');?>/<?= date('m');?>/<?= date('y');?>  <?= date('h') + 9;?>:<?= date('m')+ 29;?>:<?= date('s');?>
    </footer>
</body>
</html>                     