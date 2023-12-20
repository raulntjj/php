<div class="titulo"> Integração CSS </div>
<h1 center azul>
    <?php
    echo 'Cole';
    ?>
    <div>
        <button dobro>
            <?php
                echo 'Cole';
            ?>
        </button>
    </div>
</h1>

<style>
    button{
        padding: 5px 20px;
        background-color: blue;
        color: white;
        font-weight: bold;
        border-radius: 10px;
    }

    [center]{
        display: flex;
        justify-content: center;
    }

    [azul]{
        color: blue;
    }

    [dobro]{
        font-size: 2rem;
    }
</style>