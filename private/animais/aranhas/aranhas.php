<?php
include('../../../login/html-php/protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../animais.css">
    <link rel="shortcut icon" href="/biodex/back/icon.svg" type="image/x-icon" />

    <title>Aranhas</title>
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
                        <a href="../../animais/escorpioes/escorpioes.php" class="nav-link">Escorpiões</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../animais/aranhas/aranhas.php" class="nav-main">Aranhas</a>
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
        <h1> As aranhas </h1>

        </p>


        <div class="texto">
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                As aranhas, assim como os escorpiões, fazem parte do filo Arthropoda, cujas principais
                características são as pernas articuladas e o esqueleto externo. Possuem o corpo dividido em cefalotórax
                e abdome, quatro pares
                de pernas, um par de pedipalpos e um par de quelíceras, diferenciando-se dos demais artrópodes por não
                apresentarem mandíbulas e antenas. Aranhas e escorpiões se alimentam de outros artrópodes e de pequenos
                animais utilizando suas quelíceras para segurar e dilacerar a presa, já que não possuem mandíbulas para
                triturar o alimento. Uma característica singular das aranhas é a produção de teias complexas, elaboradas
                com finíssimos fios de seda viscosa, utilizadas para a captura de alimentos, cópula e refúgio (MONACO,
                L. M. et al, 2017). O envenenamento por aranhas recebe o título de araneísmo e se dá através do aparelho
                inoculador, as quelíceras. Apesar do grande número de aranhas encontradas na natureza e de 99,4%
                produzirem peçonha, poucas são consideradas de interesse médico no Brasil (BRASIL, 2009).

            </p>
        </div>

        <div class="texto">
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Em relação aos acidentes com aranhas, apesar de relativamente negligenciados, quando comparados ao
                ofidismo, configuram-se como um problema de saúde pública, em especial, nas regiões tropicais do mundo
                (BRASIL et al., 2009). A Organização Mundial da Saúde (OMS) considera quatro gêneros de aranhas com
                interesse médico: <i>Latrodectus</i> , <i>Loxosceles</i>, <i>Phoneutria</i> e <i>Atrax</i>, sendo os
                três primeiros com ocorrência no
                território brasileiro, totalizando cerca de 20 espécies, responsáveis por 81% dos acidentes notificados
                ao Ministério da Saúde, os quais são mais frequentes nas regiões Sul e Sudeste do Brasil (LISE, F.;
                COUTINHO, S. E.; GARCIA, F. R., 2006). No Brasil. os acidentes constituem um agravo de notificação
                compulsória no país, sendo consideradas de interesse médico os gêneros <i>Loxosceles</i>
                (aranha-marrom), <i>Phoneutria</i>
                (aranha-armadeira) e <i>Latrodectus</i> (viúva). As aranhas-marrom compõem 40% dos acidentes
                aracnídicos, os
                quais são de maior concentração nas regiões do sul brasileiro, principalmente na região metropolitana de
                Curitiba. Tais agravos estão relacionados aos atos de vestir e dormir, tendo maior frequência na região
                das coxas, nádegas, tronco e braços. Já os escorpiões, encontrados em todo o território nacional, dentre
                os 15 gêneros encontrados no país, é considerado de interesse médico apenas o gênero Tityus (BREDT, C.
                S.; LITCHTENEKER K., 2014).

            </p>
        </div>



        <h4>
            Loxosceles sp. &nbsp; • &nbsp;
            Phoneutria sp. &nbsp; • &nbsp;
            Latrodectus sp. &nbsp; • &nbsp;
            Lycosa sp.
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
                    <img src="https://drive.google.com/uc?id=1jTlrEHBRLjPRL3O0Piv1pelyQg3HcYtA" alt="Imagem 1">
                </div>

                <div class="slide">
                    <img src="https://drive.google.com/uc?id=1Of7fNV6AD4QcypTQ_tzPggh1vFYHMjcy" alt="Imagem 2">
                </div>

                <div class="slide">
                    <img src="https://drive.google.com/uc?id=1yEvxWb9WQtwVrfKtL9nEPVCeDsBl05pi" alt="Imagem 3">
                </div>

                <div class="slide">
                    <img src="https://drive.google.com/uc?id=1Gz_r0eUgxLTYeMzgZa24tyD6N52S1YiI" alt="Imagem 4">
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

                LISE, F.; COUTINHO, S. E.; GARCIA, F. R. <b>Características Clínicas do Araneísmo em Crianças e
                    Adolescentes no Município de Chapecó, Estado de Santa Catarina, Brasil</b>. Acta Sci Health Sci,
                Maringá, v.
                28, n. 1, 2006.

                <br /> <br />

                BREDT, C. S.; LITCHTENEKER K. <b>Avaliação Clínica e Epidemiológica dos acidentes com animais
                    peçonhentos
                    atendidos no Hospital Universitário do Oeste do Paraná 2008-2012</b>. Rev. Med. Res., Curitiba,
                v.16, n.1,
                p. 11-17, 2014.

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