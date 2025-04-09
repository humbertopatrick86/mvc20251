<?php
namespace service;

use dao\mysql\ClienteDAO;

class ClienteService extends ClienteDAO{
    public function listarCliente(){
        echo "<pre>";
        print_r(parent::listar());
    }
}