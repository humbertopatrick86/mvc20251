<?php
namespace dao\mysql;

use dao\IClienteDAO;
use generic\MysqlFactory;


class ClienteDAO extends MysqlFactory implements IClienteDAO{
    
    public function listar(){
        $sql = "select id,nome from clientes";
        $retorno = $this->banco->executar($sql);
        return $retorno;
    }

    public function inserir($usuario,$nome){

    }
}