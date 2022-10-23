<?php
include('../../../login/html-php/protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../home/css/index.css">
    <link rel="shortcut icon" href="/biodex/back/icon.svg" type="image/x-icon" />

    <title>Biodex!</title>
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
                        <a href="../../animais/serpentes/serpentes.php" class="nav-main">Serpentes</a>
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
                        <a href="../../home/php/usuario.php" class="nav-link"> <?= $_SESSION["nome"]; ?> </a>

                    </li>

                    <a href="./usuario.php">

                        <img src="../../../back/img/<?= $_SESSION['imagem']; ?>" class="cropped1">
                    </a>

                </ul>
            </div>
        </nav>
    </header>

    <div class="main-text">


        <p>
        <h1> As serpentes </h1>

        </p>

        <div class="slider">

            <div class="slides">
                <!-- Radio Buttons -->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <!-- Imagens -->
                <div class="slide first">
                    <img src="https://drive.google.com/uc?id=1y74dJias_vS31tmWBTzi7BfhfpT6uKm9" alt="Imagem 1">
                </div>

                <div class="slide">
                    <img src="https://drive.google.com/uc?id=1YVwgzcwjK6jtWlgThUEki_q3whZZKZef" alt="Imagem 2">
                </div>

                <div class="slide">
                    <img src="https://drive.google.com/uc?id=1vZsHjIcm86CK8e-t2Z0A_7TtWEHIjkoS" alt="Imagem 3">
                </div>

                <div class="slide">
                    <img src="https://drive.google.com/uc?id=1F2mod9L6v09hrg7w-H2loPPEvHpucbGO" alt="Imagem 4">
                </div>

                <!-- Navegação -->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>

            </div>
            <div class="manual-navigation">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
        </div>

        <p>
        <h4>
            <i>Bothrops bilineatus</i> •
            <i>Tityus serrulatus</i> •
            <i>Micrurus frontalis</i> •
            <i>Phoneutria nigriventer</i>
        </h4>
        </p>


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



    <script src="../js/index.js"> </script>
</body>

</html>