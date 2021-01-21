<?php

$login = $_POST['login'];
$senha = $_POST['senha'];
require_once $_SERVER['DOCUMENT_ROOT'] . "/sysconst/dao/UsuarioDAO.php";

$dao = new UsuarioDAO();
$usuarioLogado = $dao->logar($login, $senha);
if ($usuarioLogado != null) {
    echo "Olá " . $usuarioLogado->getNome();
    if (isset($_POST['lembrar'])){
        setcookie("idUsuarioLogado", $usuarioLogado->getId(), time()+(60*60*24*30));
    }

    else {
        session_start();
        $_SESSION['idUsuarioLogado'] = $usuarioLogado->getId();
    }
} else {
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/sysconst/login.php?erro=1');
}