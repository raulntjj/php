<div class="titulo">Conversões</div>

<?php
    echo is_int(10);
    echo '<br>';

    #float para int
    var_dump((int) 6.4);
    echo '<br>';
    var_dump((int) round (6.8));

    #operações com string
    echo '<br>';
    var_dump (3 + "3.3");
    echo '<br>';
    var_dump (3 . "1");