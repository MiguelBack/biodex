<?php
include('../../../login/html-php/protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="shortcut icon" href="/biodex/back/icon.svg" type="image/x-icon" />
    <title>Biodex!</title>
</head>

<body>



    <header>
        <nav class="nav-bar">
            <div class="nav-list">
                <ul>

                    <li class="nav-item">
                        <a href="./usuario.php" class="nav-main">Voltar</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>


    <div class="main-text">


        <form action="imagem.php" method="POST">

            <input type="file" name="imagem" id="imagem" accept=".jpg, .png">
            
        </form>

    </div>

</body>

</html>