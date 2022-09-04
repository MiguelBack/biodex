<?php
session_start();
include("conexao.php");


$email = "";
$senha = "";

if (isset($_POST["email"])) {
    $email = addslashes(trim($_POST["email"]));
}
if (isset($_POST["senha"])) {
    $senha = md5(trim($_POST["senha"]));
}

$sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
$result = $con->query($sql);
$total_de_usuarios = $result->num_rows;

if ($total_de_usuarios == 0) {
    $dados = $result->fetch_assoc();
    $_SESSION["email"] = $dados["email"];
    $_SESSION["senha"] = $dados["senha"];
    header("Location: index.php");
    exit;
} else {
    echo "<p>Usuário não encontrado</p>";
    echo "<a href=\"index.php\">Voltar</a>";
}