<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/sysconst/vo/Produto.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/sysconst/dao/ProdutoDAO.php";
$produto = new Produto();
$produto->setDescricao($_POST['descricao']);
$produto->setCodigo($_POST['codigo']);
$produto->setPrecoCompra($_POST['precoCompra']);
$produto->setPrecoVenda($_POST['precoVenda']);
$produto->setQuantidade($_POST['quantidade']);
$dao = new ProdutoDAO();
if ($_POST['id'] == 0)
    $dao->salvar($produto);
else
    $dao->atualizar($produto);
header('Location: http://' . $_SERVER['HTTP_HOST'] . '/sysconst/pages/listarProduto.php');
?>