<?php

session_start();

if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
    /* header("Location: entrar.html");*/
    echo "<p> Deu ruim no arquivo restrito.php </p>";
    exit;
}