<?php
class Produto {
   private $id ;
   private $codigo;
   private $descricao;
   private $precoCompra;
   private $precoVenda;
   private $quantidade;
   
   function getId() {
       return $this->id;
   }

   function getCodigo() {
       return $this->codigo;
   }

   function getDescricao() {
       return $this->descricao;
   }

   function getPrecoCompra() {
       return $this->precoCompra;
   }

   function getPrecoVenda() {
       return $this->precoVenda;
   }

   function getQuantidade() {
       return $this->quantidade;
   }

   function setId($id) {
       $this->id = $id;
   }

   function setCodigo($codigo) {
       $this->codigo = $codigo;
   }

   function setDescricao($descricao) {
       $this->descricao = $descricao;
   }

   function setPrecoCompra($precoCompra) {
       $this->precoCompra = $precoCompra;
   }

   function setPrecoVenda($precoVenda) {
       $this->precoVenda = $precoVenda;
   }

   function setQuantidade($quantidade) {
       $this->quantidade = $quantidade;
   }

   function toString()
   {
       return $this->descricao;
   }
}
