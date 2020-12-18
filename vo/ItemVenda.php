<?php
class ItemVenda {
    private $id;
    private $venda_id;
    private $produto_id;
    private $quantidade;
    private $valor;
    
    function getId() {
        return $this->id;
    }

    function getVenda_id() {
        return $this->venda_id;
    }

    function getProduto_id() {
        return $this->produto_id;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getValor() {
        return $this->valor;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setVenda_id($venda_id) {
        $this->venda_id = $venda_id;
    }

    function setProduto_id($produto_id) {
        $this->produto_id = $produto_id;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

}
