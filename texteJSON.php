<?php
            require $_SERVER['DOCUMENT_ROOT'] . "/sysconst/dao/ProdutoDAO.php";
            $dao = new ProdutoDAO();
            $lista = $dao->listarTodosJSON();

$myJSON = json_encode($lista);
echo $myJSON;
?>