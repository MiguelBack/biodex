<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>Login</title>
    <link rel="stylesheet" href="cadastrar.css">

    <script src="/biodex/back/cep/jquery-3.6.0.min.js"> </script>
    <script src="/biodex/back/cep/autofill.js"> </script>

</head>

<body>

    <div class="main-login">


        <div class="right-login">
            <div class="card-login">

                <h1>CADASTRO</h1>


                <form action="/biodex/back/acessa.php" method="POST">

                    <div class="textfield">
                        <label for="nome"> Nome </label>
                        <input type="nome" name="nome" id="nome" placeholder="Nome">
                    </div>

                    <div class="textfield">
                        <label for="email"> E-mail </label>
                        <input type="email" name="email" id="email" placeholder="E-mail">
                    </div>

                    <div class="textfield">
                        <label for="cep"> CEP </label>
                        <input type="text" name="cep" id="cep" placeholder="CEP">
                    </div>

                    <div class="textfield-city">

                        <div class="input1">

                            <input type="text" name="cidade" id="cidade" placeholder="Cidade">
                      
                        </div>

                        <div class="input2">
                        <input type="text" name="estado" id="estado" placeholder="Estado">
                        </div>
                 
                    </div>

                    <div class="textfield">
                        <label for="senha"> Senha </label>
                        <input type="password" name="senha" id="senha" placeholder="Senha">
                    </div>

                    <div class="textfield">
                        <label for="csenha"> Confirmar senha </label>
                        <input type="csenha" name="csenha" id="csenha" placeholder="Confirmar senha">
                    </div>


                    <button class="botao"> Cadastre-se </button>

                </form>

                <div class="entrar">
                    Já possui conta? <br>
                    <a href="./index/index.html"> Entrar </a>
                </div>

            </div>



        </div>


    </div>

</body>

</html>