<?php
include('../../../login/html-php/protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../home/css/index.css">
    <link rel="shortcut icon" href="/biodex/back/icon.svg" type="image/x-icon" />
    <title>Aranhas</title>
</head>

<body>


    <header>
        <nav class="nav-bar">
            <div class="nav-list">
                <ul>
                    <li class="nav-item">
                        <a href="../../home/php/index.php" class="nav-link">Início</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../animais/serpentes/serpentes.php" class="nav-link">Serpentes</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../animais/escorpioes/escorpioes.php" class="nav-link">Escorpiões</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../animais/aranhas/aranhas.php" class="nav-main">Aranhas</a>
                    </li>
                    <li class="nav-item">
                        <a href="/biodex/login/html-php/logout.php" class="nav-link"> Sair </a>
                    </li>
                    <li class="nav-item">
                        <a href="../../home/php/usuario.php" class="nav-link"> <?= $_SESSION["nome"]; ?> </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <div class="main-text">


        <h1> Aranhas </h1>
        <h3> Página em desenvolvimento! </h3>



    </div>

</body>

</html>