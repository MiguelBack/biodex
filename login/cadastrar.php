<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso!</title>
</head>

<body>

    <?php

    $nome = $_POST["username"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $csenha = $_POST["password-confirmation"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];

    include('conexao.php');


    //Verificar se o usuário informou dados vazios
    if ($nome == "" || $email == "" || $senha == "" || $csenha == "" || $cep == "" || $cidade == "" || $estado == "") {
        header("Location: cadastro.html");
    } else {

        //Verificar se o e-mail informado já foi cadastrado.

        $sql_validar = "SELECT * FROM usuarios WHERE email='$email'";
        $validar = $mysqli->query($sql_validar) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $validar->num_rows;

        if ($quantidade == 1) {
            echo "Já existe este email";
        } else {

            $sql = "INSERT INTO usuarios VALUES (null, '$nome', '$email', '$cep', '$cidade', '$estado', '$senha')";

            $result = $mysqli->query($sql);

            if ($mysqli->affected_rows > 0) {
                echo "<p>";
                echo $con->affected_rows;
                header("Location: entrar.html");
            } else {
                echo "<p>Ocorreu um erro: ";
                echo $con->error;
                echo "</p>";
            }
        }
    }
    ?>

</body>

</html>