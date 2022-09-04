<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $nome = $_POST["username"];
    $email = $_POST["email"];
    $senha = $_POST["password"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];

    require_once("conexao.php");

    $sql = "INSERT INTO usuarios VALUES (null, '$nome', '$email', '$cep', '$cidade', '$estado', '$senha')";

    $result = $con->query($sql);

    if ($con->affected_rows > 0) {
        echo "<p>";
        echo $con->affected_rows;
        echo " Usuário(s) incluídas com sucesso!";
        echo "</p>";
    } else {
        echo "<p>Ocorreu um erro: ";
        echo $con->error;
        echo "</p>";
    }
    ?>




</body>

</html>