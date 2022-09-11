<?php
include("../../login/html-php/protect.php");
include("../../login/html-php/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="/biodex/back/cep/jquery-3.6.0.min.js"></script>
    <script src="/biodex/back/cep/autofill.js"></script>

    <link rel="shortcut icon" href="/biodex/back/icon.svg" type="image/x-icon" />

    <link rel="stylesheet" href="../../login/css/cadastro.css" />

    <title>Alterar Dados</title>

</head>

<body>

    <?php

    $idsessao = $_SESSION['id'];

    $sql = "SELECT * FROM usuarios WHERE id = '$idsessao'";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        $linha = $result->fetch_assoc();
    ?>

    <header>
        <nav class="nav-bar">
            <div class="nav-list">
                <ul>

                    <li class="nav-item">
                        <a href="../home/php/usuario.php" class="nav-main">Voltar</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="header">
            <h2 align="center">ALTERAR DADOS</h2>
        </div>

        <form id="form" class="form" method="POST" action="./alteracao.php">

            <input type="text" id="id" name="id" value="<?= $linha['id'] ?>" hidden />

            <div class="form-control">
                <label for="username">Usuário</label>
                <input type="text" id="username" name="username" value="<?= $linha['nome'] ?>" />
                <i class="fas fa-exclamation-circle"></i>
                <i class="fas fa-check-circle"></i>
                <small>Mensagem de erro</small>
            </div>

            <div class="form-control">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" value="<?= $linha['email'] ?>" />
                <i class=" fas fa-exclamation-circle"></i>
                <i class="fas fa-check-circle"></i>
                <small>Mensagem de erro</small>
            </div>

            <div class="form-control">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" value="<?= $linha['senha'] ?>" />
                <i class="fas fa-exclamation-circle"></i>
                <i class="fas fa-check-circle"></i>
                <small>Mensagem de erro</small>
            </div>

            <div class="form-control">
                <label for="password-confirmation">Confirmação da senha</label>
                <input type="password" id="password-confirmation" name="password-confirmation"
                    value="<?= $linha['senha'] ?>" />
                <i class="fas fa-exclamation-circle"></i>
                <i class="fas fa-check-circle"></i>
                <small>Mensagem de erro</small>
            </div>

            <div class="form-control">
                <label for="cep"> CEP </label>
                <input type="text" name="cep" id="cep" value="<?= $linha['cep'] ?>" />
                <i class="fas fa-exclamation-circle"></i>
                <i class="fas fa-check-circle"></i>
                <small>Mensagem de erro</small>
            </div>

            <div class="form-control">
                <label for="cep"> Cidade </label>
                <input type="text" name="cidade" id="cidade" value="<?= $linha['cidade'] ?>" />
                <i class="fas fa-exclamation-circle"></i>
                <i class="fas fa-check-circle"></i>
                <small>Mensagem de erro</small>
            </div>

            <div class="form-control">
                <label for="cep"> Estado </label>
                <input type="text" name="estado" id="estado" value="<?= $linha['estado'] ?>" />
                <i class="fas fa-exclamation-circle"></i>
                <i class="fas fa-check-circle"></i>
                <small>Mensagem de erro</small>
            </div>

            <button type="submit">Alterar</button>
        </form>

    </div>

    <script src="https://kit.fontawesome.com/f9e19193d6.js" crossorigin="anonymous"></script>
    <script src="/biodex/login/cadastro.js"></script>

    <?php
    } else {
        echo "<p>Nenhum registro encontrado para atualizar</p>";
    }
    ?>
</body>

</html>