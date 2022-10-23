<?php
include('../../../login/html-php/protect.php');
include('../../../login/html-php/conexao.php');


$id = $_GET['id'];


$saberr = $mysqli->query("SELECT * FROM usuarios WHERE id='$id'");
$saber = mysqli_fetch_assoc($saberr);
$email = $saber["email"];

if ($email == $_SESSION['email']) {
    header('Location: ./usuario.php');
}

$publicacoes = $mysqli->query("SELECT * FROM publicacoes WHERE email='$email' ORDER BY id desc");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../../home/css/publicar.css">

    <link rel="shortcut icon" href="/biodex/back/icon.svg" type="image/x-icon" />
    <link href="/website/css/uicons-bold-rounded.css" rel="stylesheet">

    <title>Perfil</title>
</head>

<header>
    <nav class="nav-bar">
        <div class="nav-list">
            <ul>
                <li class="nav-item">
                    <a href="../../home/php/index.php" class="nav-main">Início</a>
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
                    <a href="../../home/php/usuario.php" class="nav-link"> <?= $_SESSION["nome"]; ?> </a>
                </li>

                <a href="../../home/php/usuario.php">
                    <img src="../../../back/img/<?= $_SESSION['imagem']; ?>" class="cropped1">
                </a>

            </ul>
        </div>
    </nav>
</header>




<div class="main-text">

    <div class="publicar">

        <form method="POST" enctype="multipart/form-data">

            <textarea name="texto" placeholder="Escreva uma publicação..."></textarea>



            <label for="file-input">

                <img src="../../../back/img/add.svg" title="Inserir arquivo" class="inserir" />

            </label>
            <input type="submit" value="Publicar" name="publicar" />
            <input type="file" name="file" id="file-input" hidden />


        </form>

        <?php

        while ($publicacao = mysqli_fetch_assoc($publicacoes)) {
            $usuario = $publicacao['usuario'];
            $id = $publicacao['id'];

            if ($publicacao['imagem'] == "") {
                echo   '<div class="publicacao" id="' . $id . '">
               
                <p>  <img src="../../../back/img/' . $_SESSION["imagem"] . '" class="usuario-img"> 
               
                <a href="perfil.php?id=' . $_SESSION['id'] . '">' . $usuario . '</a>' . '<span class="data">' . $publicacao["datahoje"] . '</p>
                <span class="texto-pub">' . $publicacao['texto'] . '</span> 
            </div>';
            } else {
                echo   '<div class="publicacao" id="' . $id . '">
               
                <p>  <img src="../../../back/img/' . $_SESSION["imagem"] . '" class="usuario-img">

                  <a href="perfil.php?id=' . $_SESSION['id'] . '"> ' . $usuario . '</a>' . '<span class="data">' . $publicacao["datahoje"] . '</span> </p>
            <span class="texto-pub">' . $publicacao['texto'] . '</span> 
            <img src="../../../back/img/upload/' . $publicacao["imagem"] . '" class="pub-img"/>
        </div>';
            }
        }
        ?>

    </div>

</div>

</body>

</html>