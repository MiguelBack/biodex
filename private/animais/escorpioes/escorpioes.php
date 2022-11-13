<?php
include('../../../login/html-php/protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../animais.css">
    <link rel="shortcut icon" href="/biodex/back/icon.svg" type="image/x-icon" />

    <title>Escorpiões</title>
</head>

<body>

    <header>
        <nav class="nav-bar">
            <div class="nav-list">
                <ul>
                    <li class="nav-item">
                        <a href="../../home/php/index.php" class="nav-link">Início</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../animais/serpentes/serpentes.php" class="nav-link">Serpentes</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../animais/escorpioes/escorpioes.php" class="nav-main">Escorpiões</a>
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

                    <a href="./usuario.php">

                        <img src="../../../back/img/<?= $_SESSION['imagem']; ?>" class="cropped1">
                    </a>

                </ul>
            </div>
        </nav>
    </header>

    <div class="main-text">


        <p>
        <h1> Os escorpiões </h1>

        </p>


        <div class="texto">
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Escorpiões são animais de hábitos noturnos, permanecendo, durante o dia, debaixo de troncos, pedras e
                galerias no solo, que podem ser restos de construção, lixo e entulhos no ambiente urbano, favorecendo a
                proliferação desses animais. Todas as espécies de escorpiões têm peçonha, que é inoculada através do
                ferrão, também chamado de aguilhão. A toxina, na maioria dos exemplares, é pouco perigosa para a saúde
                humana, no entanto, há determinadas espécies que podem representar perigo, sobretudo às crianças
                (MONACO, L. M. et al, 2017).

            </p>
        </div>

        <div class="texto">
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Com relação a esses animais, os que apresentam importância médica compõem, sob a óptica da saúde
                pública, um importante problema, haja vista que o envenenamento causado por animais peçonhentos possui
                impacto significativo em regiões tropicais ou subtropicais, como nos países do continente asiático,
                africano e da América Latina, sendo o Brasil o país com o maior número absoluto de acidentes de seu
                continente (LOPES, A. B., 2017). A gravidade destes acidentes é reflexo de problemas econômicos, médicos
                e sociais, devido à possibilidade de gerar sequelas que ocasionam a incapacidade temporária ou
                definitiva, ou mesmo a morte das vítimas (SANTANA, V. T. P., 2015). Sendo importantes agentes
                epidemiológicos, as serpentes, escorpiões e aranhas cursam com alterações de gravidade leve a severa nos
                casos de acidentes, podendo ser responsabilizados por cerca de 100 mil acidentes e, aproximadamente, 200
                óbitos catalogados por ano (CORDEIRO, E. C. et al, 2021). Os acidentes escorpiônicos são de alta
                relevância devido à frequência em que ocorrem juntamente com a potencial gravidade, sobretudo quando a
                pessoa envolvida é criança ou idosa. O Ministério da Saúde aponta 8 mil acidentes por ano, sendo Tityus
                o principal causador de acidentes graves, especificamente a espécie <i> Tityus serrulatus</i>, que é
                muito comum
                nas residências.

            </p>
        </div>



        <h4>
            Tityus serrulatus &nbsp; • &nbsp;
            Tityus stigmurus &nbsp; • &nbsp;
            Tityus bahiensis &nbsp; • &nbsp;
            Tityus obscurus
        </h4>

        <div class="slider">


            <div class="slides">
                <!-- Radio Buttons -->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <!-- Imagens -->
                <div class="slide first">
                    <img src="https://drive.google.com/uc?id=1YVwgzcwjK6jtWlgThUEki_q3whZZKZef" alt="Imagem 1">
                </div>

                <div class="slide">
                    <img src="https://drive.google.com/uc?id=1eHlEyNHKK339ikF5R1BLgZZRRWWi1nHr" alt="Imagem 2">
                </div>

                <div class="slide">
                    <img src="https://drive.google.com/uc?id=113_omvUEEcJXjTB_a-FTnI5jE9-cVGak" alt="Imagem 3">
                </div>

                <div class="slide">
                    <img src="https://drive.google.com/uc?id=1GMdOmS6LaTPxR4CUm840USCabMJgs0UP" alt="Imagem 4">
                </div>

                <!-- Navegação -->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>

            </div>
            <div class="manual-navigation">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div </div>
        </div>


        <div class="texto">
            <p>
            <h6>
                MONACO, L. M. et al. <b> Animais venenosos: serpentes, anfíbios, aranhas, escorpiões, insetos e
                    lacraias. </b>
                2.ed.rev.ampl. São Paulo: Instituto Butantan, 2017.

                <br /> <br />

                BRASIL.<b> Guia de vigilância epidemiológica.</b> Ministério da Saúde, Secretaria de Vigilância
                em
                Saúde, Departamento de Vigilância Epidemiológica, Brasília, 7. ed., 2009.

                <br /> <br />

                LOPES, A. B. et al.<b> Perfil epidemiológico dos acidentes por animais peçonhentos na região Norte entre
                    os
                    anos de 2012 e 2015</b>. Revista de Patologia do Tocantins, Palmas, v. 4, n. 2, p. 36-40. 2017.

                <br /> <br />

                SANTANA, L. A. et al.<b> Arachnidism in Brazil</b>. Brazilian Journal of Health Review, v. 3, n. 5,
                p.
                12859-12872, 2020.

                <br /> <br />

                CORDEIRO, E. C.; et al.<b> Perfil epidemiológico de acidentes com animais peçonhentos no estado
                    do
                    Maranhão</b>. Revista Ciência Plural. 2021; 7(1):72-87.

            </h6>

            </p>

        </div>

        <style>
        .cropped1 {
            width: 20px;
            height: 20px;
            object-fit: cover;
            border: none;
            border-radius: 100px;
        }
        </style>



        <script src="../../home/js/index.js"> </script>
</body>

</html>