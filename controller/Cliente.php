<?php

namespace controller;

use service\ClienteService;

class Cliente
{
    public function listar()
    {
       $service = new ClienteService();
       $service->listarCliente();
    }
}
