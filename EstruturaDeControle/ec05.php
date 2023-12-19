<div class="titulo">conversor</div>

<form action ="#" method="post">
    <div>
        <input type="text" name="unit" id="unit">
        <select name="conversor" id="conversor">
        <option value="0">Km > Milha</option>
        <option value="1">Milha > Km</option>
    </div>
    <div>
        <input type="submit">
    </div>
</form>

<?php

$unit = $_POST['unit'];
$q = $_POST['conversor'];
switch($q){
    case 0:
        echo $unit . "km = ";
        $unit *= 0.621371;
        echo $unit . " milhas";
        break;
    case 1:
        echo $unit . "Milhas = ";
        $unit /= 0.621371;
        echo $unit . " Km";
        break;
}