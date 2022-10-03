<?php
include('../../../login/html-php/protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/usuario.css">
    <link rel="shortcut icon" href="/biodex/back/icon.svg" type="image/x-icon" />

    <title>Perfil</title>
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
                        <a href="./usuario.php" class="nav-main"> <?= $_SESSION["nome"]; ?> </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <div class="main-text">


        <a href="imagem-usuario.php"><img src="/biodex/back/imagem-usuario.png" alt="Imagem do Usuário"></a>


        <div class="container">

            <div class="header">
                <h1 align="center"> Dados da Conta</h1>
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


        <h5 align="center"> <a href="../../alterar-dados/alterar.php"> Alterar Dados</a> </h5>

    </div>

</body>

</html>