<?php
include('../../../login/html-php/protect.php');
include('../../../login/html-php/conexao.php');

$msg = false;
$idsessao = $_SESSION['id'];

if (isset($_FILES['arquivo'])) {
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novoNome = md5(time()) . $extensao;
    $diretorio = "../../../back/img/";

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novoNome);

    $sqlCode = "UPDATE usuarios SET imagem='$novoNome' WHERE id='$idsessao'";
    if ($mysqli->query($sqlCode)) {

        header('Location: usuario.php');

        $_SESSION['imagem'] =  $novoNome;
    } else {
        $msg = "Arquivo não enviado";
    }
}

if (isset($_POST["remover"])) {

    $sqlCode = "UPDATE usuarios SET imagem='imagem-usuario.svg' WHERE id='$idsessao'";
    if ($mysqli->query($sqlCode)) {

        header('Location: usuario.php');
        $_SESSION['imagem'] =  'imagem-usuario.svg';
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="shortcut icon" href="/biodex/back/icon.svg" type="image/x-icon" />
    <title>Biodex!</title>
</head>

<body>

    <header>
        <nav class="nav-bar">
            <div class="nav-list">
                <ul>

                    <li class="nav-item">
                        <a href="./usuario.php" class="nav-main">Voltar</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>


    <div class="main-text">

        <form action="imagem-usuario.php" method="POST" enctype="multipart/form-data">

            <input type="text" id="id" name="id" value="<?= $linha['id'] ?>" hidden />

            <label for="file"> Escolher Imagem</label>
            <input type="file" required name="arquivo" id="file">

            <img class="cropped1" src="../../../back/img/<?= $_SESSION['imagem']; ?>" id="imgResult">

            <input type="submit" value="Salvar" class="salvar">


        </form>

        <form action="imagem-usuario.php" method="POST">
            <input type="submit" value="Remover Imagem" name="remover" class="remover">
        </form>

        <?php
        if ($msg != false) echo "<p> $msg </p>";

        ?>

    </div>

    <script>
        var imagem = document.querySelector('[id=file]')

        imagem.addEventListener('change', e => {

            var file = e.target.files[0]
            var fileReader = new FileReader()

            fileReader.onloadend = () => {
                document.querySelector('#imgResult').setAttribute('src', fileReader.result)
            }

            fileReader.readAsDataURL(file)
        })
    </script>

    <style>
        input[type="file"] {
            display: none;
        }

        label,
        .salvar {
            margin: 20px;
            text-align: center;
            background-color: #26ff47;
            border: none;
            text-transform: uppercase;
            color: #292333;
            font-size: 14px;
            width: 335px;
            border-radius: 10px;
            padding: 10px;
            cursor: pointer;
            display: block;
            margin-left: auto;
            margin-right: auto;
            letter-spacing: 3px;
            transition: 0.3s;
        }


        .remover {

            color: #f50551;
            background: transparent;
            outline: none;
            border: none;
            font-weight: 600;
            cursor: pointer;
            font-size: 12pt;
        

        }


        label:hover,
        .salvar:hover {
            letter-spacing: 5px;
        }

        .cropped1 {
            margin: 10px;
            width: 335px;
            height: 300px;
            object-fit: cover;
            border: none;

        }

        img {

            border-radius: 10px;

        }

        img1 {
            width: 300px;
            height: 300px;
            border-radius: 10px;

        }
    </style>


</body>

</html>