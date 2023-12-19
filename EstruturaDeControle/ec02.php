<form method="post" action="#">
    <div>
        <label for="input">Insira seu nome:</label>
            <input type="text" name="input" id="input">
    </div>
    <input type="submit">
</form>

<?php

echo $_POST['input'];

?>