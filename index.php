<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Raul de Oliveira</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo preto">
                    <h3>PHP Básico</h3>
                    <ul>
                        <li>
                            <a href="ex.php?dir=basico&file=ex005">
                                Inteiros
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=basico&file=ex006">
                                Float
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=basico&file=ex007">
                                Operações
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=basico&file=ex008">
                                Strings
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=basico&file=ex009">
                                Desafio
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=basico&file=ex010">
                                Conversões
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=basico&file=ex011">
                                Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=basico&file=ex012">
                                Equação
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=basico&file=ex013">
                                Atribuições
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=basico&file=ex014">
                                Variáveis variáveis
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo preto">
                    <h3>Estrutura de controle</h3>
                    <ul>
                        <li>
                            <a href="ex.php?dir=estruturadecontrole&file=ec01">
                                Estrutura de Controle 01
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=estruturadecontrole&file=ec02">
                                $_post & $_get
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=estruturadecontrole&file=ec03">
                                Operador Ternário
                            </a>    
                        </li>
                        <li>
                            <a href="ex.php?dir=estruturadecontrole&file=ec04">
                                Switch
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=estruturadecontrole&file=ec05">
                                Conversor
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=estruturadecontrole&file=ec06">
                                Laços
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=estruturadecontrole&file=foreach">
                                Foreach
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=estruturadecontrole&file=Tabela">
                                Tabela
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo preto">
                    <h3>Arrays</h3>
                    <ul>
                        <li>
                            <a href="ex.php?dir=array&file=basico">
                                Basico
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=array&file=map">
                                Mapa
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=array&file=meses">
                                Desafio Meses
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=array&file=oparray">
                                Operações com Arrays
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=array&file=sorteio">
                                Sorteio
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=array&file=multidimensionais">
                                Multidimensionais
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=array&file=constArray">
                                Array Constante
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=array&file=get">
                                $_GET
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=array&file=post">
                                $_POST
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=array&file=comparacao">
                                Comparação
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo preto">
                    <h3>Funções</h3>
                    <ul>
                        <li>
                            <a href="ex.php?dir=funções&file=funcao_escopo">
                                Função e Escopo
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=funções&file=argumentos">
                                Argumentos
                            </a>
                        </li>
                        <li>
                            <a href="ex.php?dir=funções&file=tipos">
                                Tipos
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        <?= date('d');?>/<?= date('m');?>/<?= date('y');?>  <?= date('h') + 9;?>:<?= date('m')+ 29;?>:<?= date('s');?>
    </footer>
</body>
</html>