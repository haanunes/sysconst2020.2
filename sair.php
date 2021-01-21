<?php
session_start();
session_destroy();

setcookie("idUsuarioLogado", 0, time()-100);

 header('Location: http://'.$_SERVER['HTTP_HOST'].'/sysconst/login.php?erro=1');
