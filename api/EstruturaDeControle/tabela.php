<div class="titulo">Tabela</div>

<?php
    $table = [
        ["1", "2", "3"],
        ["3", "4", "6"],
        ["7", "8", "9"]
    ];
?>

<table>
    <?php
        foreach($table as $line){
            echo "<tr>";
            foreach($line as $column){
                echo "<td>$column</td>";
            }
            echo "</tr>";
        }
    ?>
</table>

<style>
    table{
        border: 1px solid black;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr{
        border: 1px solid black;
    }

    table td{
        padding: 10px 20px;
    }
</style>