<?php

class UsuarioDAO {
    function salvar($obj) {
        require $_SERVER['DOCUMENT_ROOT']."/sysconst/bd/Conexao.php";
        try {
            $sql = "insert into usuario (nome,login,email,senha)
                    values (:nome,:login,:email,:senha)";
            $p_sql = $dbh->prepare($sql);
            $p_sql->bindValue(":nome", $obj->getNome());
            $p_sql->bindValue(":login", $obj->getLogin());
            $p_sql->bindValue(":email", $obj->getEmail());
            $p_sql->bindValue(":senha", $obj->getSenha());
            $p_sql->execute();
            return $dbh->lastInsertId();
        } catch (Exception $ex) {
            echo "Erro: Não foi possível inserir. " . 
                    $ex->getMessage();
        }
    }
    function atualizar() {
    }
    function remover() {
    }
    function listar() {
    }
    function getPorId() {
    }
    function listarTodos() {
    }
    
}
