<?php
include("../../login/conexao.php");

$nome = $_POST["username"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$csenha = $_POST["password-confirmation"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$idsessao = $_POST["id"];


//Verificar se o usuário informou os mesmos dados já cadastrados.

$sql_validar = "SELECT * FROM usuarios WHERE id='$idsessao'AND nome='$nome' AND email='$email' AND senha='$senha' AND cep='$cep' AND cidade='$cidade' AND estado='$estado'";
$validar = $mysqli->query($sql_validar) or die("Falha na execução do código SQL: " . $mysqli->error);
$quantidade = $validar->num_rows;

if ($quantidade == 1) {
    header("Location: ./alterar.php");
} else {

    //Verificar se o usuário informou dados vazios

    if (empty($nome)) {
        header("Location: ./alterar.php");
    } else if (empty($email)) {
        header("Location: ./alterar.php");
    } else if (empty($senha)) {
        header("Location: ./alterar.php");
    } else if (empty($csenha)) {
        header("Location: ./alterar.php");
    } else if (empty($cep)) {
        header("Location: ./alterar.php");
    } else if (empty($cidade)) {
        header("Location: ./alterar.php");
    } else if (empty($estado)) {
        header("Location: ./alterar.php");
    } else {

        //Verificar se o e-mail informado já foi cadastrado (POR OUTRO USUÁRIO).

        $sql_validar = "SELECT * FROM usuarios WHERE id='$idsessao'AND email='$email'";
        $validar = $mysqli->query($sql_validar) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $validar->num_rows;

        if ($quantidade == 1) {
            $sql = "UPDATE usuarios SET nome='$nome', email='$email', cep='$cep', cidade='$cidade', estado='$estado' WHERE id='$idsessao'";

            $result = $mysqli->query($sql);

            if ($mysqli->affected_rows > 0) {
                header('Location: ./alteracao-sucesso.html');
            }
        } else {

            header('Location: ./email-ja-existe.html');
        }
    }
}