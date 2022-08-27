<?php

function buscarCep($cep)
{
    $cep = str_replace("-", "", $cep);
    @$url = file_get_contents("http://viacep.com.br/ws/$cep/json/");

    if (strlen($url) > 0) {
        return $url;
    } else {
        return "";
    }
}

echo buscarCep($_POST["cep"]);