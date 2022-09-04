<?php
session_start();
$login = $_COOKIE["usuario"];
$senha = $_COOKIE["senha"];

$con = new mysqli("localhost", "root", "", "biodex");
$sql = "SELECT * FROM usuarios WHERE username='$login' AND password='$senha' ";

$result = $con->query($sql);

if ($result->num_rows != 1) {
    header("Location: /biodex/front/erro.php");
    exit(0);

}