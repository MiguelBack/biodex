<?php

$usuario = 'root';
$senhabd= '';
$database = 'biodex';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senhabd, $database);

if ($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}