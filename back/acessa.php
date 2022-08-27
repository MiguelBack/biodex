<?php

@$login = trim($_POST["login"]);
@$senha = trim($_POST["senha"]);

if (strlen($login) == 0 || strlen($senha) == 0) {
    header("Location: erro.php");
    exit(0);
}

$con = new mysqli("localhost", "root", "", "biodex");
$sql = "SELECT * FROM usuarios WHERE username='$login' AND password='$senha' ";

$result = $con->query($sql);

if ($result->num_rows == 1) {
    setcookie("usuario", "$login");
    setcookie("senha", "$senha");
    header("Location: /biodex/front/private/index.php");
    exit(0);
} else {
    header("Location: /biodex/front/erro.php");
    exit(0);
}
