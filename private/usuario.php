<?php
include('../login/protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./usuario.css">
    <link rel="shortcut icon" href="/biodex/back/icon.svg" type="image/x-icon" />

    <title>Biodex!</title>
</head>

<body>



    <header>
        <nav class="nav-bar">
            <div class="nav-list">
                <ul>
                    <li class="nav-item">
                        <a href="./index.php" class="nav-link">Início</a>
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
                        <a href="sobre.html" class="nav-main"> <?= $_SESSION["nome"]; ?> </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <div class="main-text">


        <div class="container">

            <div class="header">
                <h1 align="center"> DADOS da Conta</h1>
            </div>


            <div align="center">
                <h2>Usuário</h2>
                <h3> <?= $_SESSION["nome"]; ?> </h3>
                <h2>E-mail</h2>
                <h3> <?= $_SESSION['email']; ?> </h3>
                <h2>CEP</h2>
                <h3> <?= $_SESSION['cep']; ?> </h3>
                <h2>Cidade</h2>
                <h3> <?= $_SESSION['cidade']; ?> </h3>
                <h2>Estado</h2>
                <h3> <?= $_SESSION['estado']; ?> </h3>
            </div>

        </div>


        <h5 align="center"> <a href="./alterar-dados/alterar.php"> Alterar Dados</a> </h5>

    </div>

</body>

</html>