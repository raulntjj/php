<div class="titulo">$_POST</div>

<form method="post" action="#">
    <label for="nome">Nome:</label>
    <input type="text" name="nome">
    <input type="submit">
</form>

<?php
    echo $_POST;
    print_r ($_POST);
?>