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
                        <a href="./index.php" class="nav-main">Início</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../animais/serpentes/serpentes.php" class="nav-link">Serpentes</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../animais/escorpioes/escorpioes.php" class="nav-link">Escorpiões</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../animais/aranhas/aranhas.php" class="nav-link">Aranhas</a>
                    </li>
                    <li class="nav-item">
                        <a href="/biodex/login/html-php/logout.php" class="nav-link"> Sair </a>
                    </li>
                    <li class="nav-item">
                        <a href="./usuario.php" class="nav-link"> <?= $_SESSION["nome"]; ?> </a>

                    </li>

                    <a href="./usuario.php">

                        <img src="../../../back/img/<?= $_SESSION['imagem']; ?>" class="cropped1">
                    </a>


                </ul>
            </div>
        </nav>
    </header>


    <div class="main-text">


        <h1>Bem-vindo(a) </h1>
        <h3> <?= $_SESSION["nome"]; ?>! </h3>

    </div>

    <style>
        .cropped1 {
            width: 20px;
            height: 20px;
            object-fit: cover;
            border: none;
            border-radius: 100px;
        }
    </style>


</body>

</html>