<?php

class Venda {
    private $id;
    private $data;
    private $hora;
    private $cliente_id;
    private $valor;
    
    function getId() {
        return $this->id;
    }

    function getData() {
        return $this->data;
    }

    function getHora() {
        return $this->hora;
    }

    function getCliente_id() {
        return $this->cliente_id;
    }

    function getValor() {
        return $this->valor;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

    function setCliente_id($cliente_id) {
        $this->cliente_id = $cliente_id;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function toString() {
       return $this->getData()." ".$this->getHora();
    }

}
