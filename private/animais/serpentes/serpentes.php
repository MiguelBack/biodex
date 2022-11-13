<?php
include('../../../login/html-php/protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../animais.css">
    <link rel="shortcut icon" href="/biodex/back/icon.svg" type="image/x-icon" />

    <title>Serpentes</title>
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
                        <a href="../../animais/serpentes/serpentes.php" class="nav-main">Serpentes</a>
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

                    <a href="./usuario.php">

                        <img src="../../../back/img/<?= $_SESSION['imagem']; ?>" class="cropped1">
                    </a>

                </ul>
            </div>
        </nav>
    </header>

    <div class="main-text">


        <p>
        <h1> As serpentes </h1>

        </p>


        <div class="texto">
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Répteis de corpo alongado, revestido por escamas e desprovidos de membros e pálpebras, as serpentes são
                animais ectotérmicos, isto é,
                necessitam de fontes de calor externas para regular a temperatura corporal. Suas modificações no crânio
                formam uma tênue ligação entre os ossos da boca,
                permitindo aberturas até três vezes maiores que o diâmetro do corpo, para a captura das presas (MONACO,
                L. M. et al, 2017).
                No Brasil, são quatro os tipos de acidentes causados por serpentes considerados de interesse médico:
                <b>botrópicos</b>, <b>crotálicos</b>, <b>laquéticos</b> e <b>elapídicos</b>. Acidentes por serpentes não
                peçonhentas são
                relativamente frequentes e, na maioria dos casos, não determinam casos graves, sendo considerados de
                menor importância médica (BRASIL, 2009).
            </p>
        </div>

        <div class="texto">
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Um dos fatores determinantes para a definição do grau de periculosidade das serpentes é a dentição, que
                pode ser
                áglifa, opistóglifa, proteróglifa e solenóglifa. Serpentes que não possuem dentes especializados para a
                inoculação de toxinas apresentam a dentição áglifa,
                servindo, basicamente, para segurar o alimento e ingerí-lo, facilitando a constrição ou a ingestão da
                presa ainda vida, como é o caso da jibóia, sucuri e
                caninana. Já aquelas que possuem um dente sulcado na parte de trás da maxila superior, por onde é
                expelida a toxina, são as opistóglifas, como a falsa-coral,
                parelheira, cobra-cipó, corre-campo e a cobra-verde. A posição posterior do dente na maxila tem como
                consequência a dificultação da injeção da peçonha nos
                humanos e, em casos de acidente, na maior parte das vezes, o alívio dos sintomas é o suficiente para
                tratar o paciente. Por sua vez, as serpentes que possuem
                dente sulcado posicionado na parte da frente da maxila são as de dentição proteróglifa (no Brasil, é o
                caso da coral-verdadeira), cuja peçonha produzida é
                extremamente potente, fazendo-se necessário o uso de soro antiofídico para neutralizar o acidente
                gerado. Por fim, a dentição solenóglifa é altamente
                especializada na inoculação de peçonha e está presente nas jararacas, cascavéis e surucucus. O dente é
                oco e localiza-se à frente da maxila superior,
                formando um tubo, onde a peçonha escorre. Quando a serpente com esse tipo de dentição abre a boca, o
                grande dente inoculador é projetado para frente.
                Juntamente com a peçonha potente, os acidentes sempre se tornam importantes e, para tratá-lo de forma
                eficaz, é necessário o uso do soro antiofídico.
                Portanto, embora todas as serpentes, praticamente, possam morder, apenas as de dentições proteróglifas e
                solenóglifas apresentam interesse em saúde,
                as quais são capazes de inocular peçonha capaz de causar danos significativos à saúde humana (MONACO, L.
                M. et al, 2017).
            </p>
        </div>



        <h4>
            Bothrops sp. &nbsp; • &nbsp;
            Crotalus sp. &nbsp; • &nbsp;
            Micrurus sp. &nbsp; • &nbsp;
            Lachesis sp.
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
                    <img src="https://drive.google.com/uc?id=1SzoCnp13TB9Jf63lYe9xz7eS__5dssyU" alt="Imagem 1">
                </div>

                <div class="slide">
                    <img src="https://drive.google.com/uc?id=1dZl-PcZKca2bR8kc807Ia1bECuAcIiSl" alt="Imagem 2">
                </div>

                <div class="slide">
                    <img src="https://drive.google.com/uc?id=1vZsHjIcm86CK8e-t2Z0A_7TtWEHIjkoS" alt="Imagem 3">
                </div>

                <div class="slide">
                    <img src="https://drive.google.com/uc?id=1cUYZAL8pjZR-SDaCdEiybXkIAEsMtcMg" alt="Imagem 4">
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