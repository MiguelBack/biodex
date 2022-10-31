<?php
include('../../../login/html-php/protect.php');
include('../../../login/html-php/conexao.php');
$usuario = $_SESSION['nome'];

date_default_timezone_set('America/Sao_Paulo');
$consulta = "SELECT * FROM publicacoes ORDER BY id desc";
$publicacoes = $mysqli->query($consulta) or die($mysqli->error);

$hora = date('H:i:s');

if (isset($_POST['publicar'])) {
    if ($_FILES["file"]["error"] > 0) {
        $texto = $_POST['texto'];
        $hoje = date("d-m-Y");


        if ($texto == "") {
            echo "<h3 Você precisa escrever algo antes de publicar!";
        } else {
            $query = "INSERT INTO publicacoes (usuario,texto,datahoje) VALUES ('$usuario', '$texto', '$hoje')";
            $data = $mysqli->query($query) or die("Falha na execução do código SQL: " . $mysqli->error);

            if ($data) {
                header("Location:  ./index.php");
            } else {
                echo "Falha na execução do código SQL: " . $mysqli->error;
            }
        }
    } else {
        $n = rand(0, 1000000);
        $img = $n . $_FILES["file"]["name"]; //name

        move_uploaded_file($_FILES["file"]["tmp_name"], "../../../back/img/upload/" . $img);

        $texto = $_POST['texto'];
        $hoje = date("d-m-Y");

        if ($texto == "") {
            echo "<h3 Você precisa escrever algo antes de publicar!";
        } else {
            $query = "INSERT INTO publicacoes (usuario,texto,imagem,datahoje) VALUES ('$usuario', '$texto', '$img', '$hoje')";
            $data = $mysqli->query($query) or die("Falha na execução do código SQL: " . $mysqli->error);

            if ($data) {
                header("Location:  ./index.php");
            } else {
                echo "Falha na execução do código SQL: " . $mysqli->error;
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../../home/css/publicar.css">

    <link rel="shortcut icon" href="/biodex/back/icon.svg" type="image/x-icon" />
    <link href="/website/css/uicons-bold-rounded.css" rel="stylesheet">

    <title> Página Inicial</title>
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

        while ($publicacao = $publicacoes->fetch_array()) {
            $usuario = $publicacao['usuario'];
            $id = $publicacao['id'];

            $consulta1 = "SELECT * FROM usuarios WHERE nome='$usuario'";
            $pub = $mysqli->query($consulta1) or die($mysqli->error);

            $pub_usuario = $pub->fetch_array();


            if ($publicacao['imagem'] == "") {
                echo   '<div class="publicacao" id="' . $id . '">
               
                <p>  <img src="../../../back/img/' . $pub_usuario["imagem"] . '" class="usuario-img"> 

               <a href="#"> ' . $usuario . '</a>' . '<span class="data">' . $publicacao["datahoje"] . '</p>
                <span class="texto-pub">' . $publicacao['texto'] . '</span> 
            </div>';
            } else {
                echo   '<div class="publicacao" id="' . $id . '">
               
                <p>  <img src="../../../back/img/' . $pub_usuario["imagem"] . '" class="usuario-img">

                  <a href="#"> ' . $usuario . '</a>' . '<span class="data">' . $publicacao["datahoje"] . '</span> </p>
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