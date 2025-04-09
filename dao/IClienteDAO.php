<?php
namespace dao;
interface IClienteDAO{
    public function listar();
    public function inserir($usuario,$nome);
}