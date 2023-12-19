<div class="titulo"> Equação</div>

<?php
    $p1 = (6 * (3+2))**2;
    $p2 = (3*2);
    $p = $p1 / $p2;

    $q1 = ((1-5) * (2-7));
    $q2 = 2;
    $q = ($q1 / $q2) **2;

    $t = ($p - $q)**3;

    $final = $t / (10**3);

    echo $final. '<br><br>';

    echo ("
    p1 = (6 * (3+2))**2; <br>
    p2 = (3*2); <br>
    p = p1 / p2; <br> <br>

    q1 = ((1-5) * (2-7)); <br>
    q2 = 2; <br>
    q = (q1 / q2) **2; <br> <br>

    t = (p - q)**3; <br> <br>

    final = t / (10**3); <br>
    ");