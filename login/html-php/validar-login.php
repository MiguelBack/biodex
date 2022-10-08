<?php
include('conexao.php');


if (isset($_POST['email']) || isset($_POST['senha'])) {

    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {

        $usuario = $sql_query->fetch_assoc();

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['cep'] = $usuario['cep'];
        $_SESSION['cidade'] = $usuario['cidade'];
        $_SESSION['estado'] = $usuario['estado'];
        $_SESSION['imagem'] = $usuario['imagem'];

        header("Location: ../../private/home/php/index.php");
    } else {
        header("Location: entrar.html");
    }
}