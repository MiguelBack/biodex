<?php
include('../login/protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./index.css">
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
                        <a href="cadastro.html" class="nav-link">Serpentes</a>
                    </li>
                    <li class="nav-item">
                        <a href="cadastro.html" class="nav-link">Escorpiões</a>
                    </li>
                    <li class="nav-item">
                        <a href="cadastro.html" class="nav-link">Aranhas</a>
                    </li>
                    <li class="nav-item">
                        <a href="/biodex/login/logout.php" class="nav-link"> Sair </a>
                    </li>
                    <li class="nav-item">
                        <a href="usuario.php" class="nav-link"> <?= $_SESSION["nome"]; ?> </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <div class="main-text">


        <h1>Bem-vindo(a) </h1>
        <h3> <?= $_SESSION["nome"]; ?>! </h3>



    </div>

</body>

</html>