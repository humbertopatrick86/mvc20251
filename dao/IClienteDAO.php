<?php
namespace dao;
interface IClienteDAO{
    public function listar();
    public function inserir($nome,$endereco);
    public function listarId($id);
    public function alterar($id,$nome,$endereco);
}