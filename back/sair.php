<?php

setcookie("usuario", "");
setcookie("senha", "");

unset($_COOKIE["usuario"]);
unset($_COOKIE["senha"]);

header("Location: /front/public/index/index.html");
