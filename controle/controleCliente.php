<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/sysconst/vo/Cliente.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/sysconst/dao/ClienteDAO.php";
$cliente = new Cliente();
$cliente->setNome($_POST['nome']);
$cliente->setRua($_POST['rua']);
$cliente->setNumero($_POST['numero']);
$cliente->setBairro($_POST['bairro']);
$cliente->setCidade($_POST['cidade']);
$cliente->setUf($_POST['uf']);
$cliente->setCep($_POST['cep']);
$cliente->setCelular($_POST['celular']);
$dao = new ClienteDAO();
if($_POST['id']==0)
    $dao->salvar($cliente);
else
    $dao->atualizar($cliente);
header('Location: http://'.$_SERVER['HTTP_HOST'].'/sysconst/pages/listarCliente.php');

?>