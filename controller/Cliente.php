<?php

namespace controller;

use service\ClienteService;
use template\ClienteTemp;
use template\ITemplate;

class Cliente
{
    private ITemplate $template;
    public function __construct()
    {
        $this->template = new ClienteTemp();
    }

    public function listar()
    {
       $service = new ClienteService();
      $resultado= $service->listarCliente();
       $this->template->layout("\\public\\cliente\\listar.php",$resultado);
    }

    public function inserir()
    {
        $nome = $_POST["nome"];
        $endereco = $_POST["endereco"];
       $service = new ClienteService();
      $resultado= $service->inserir($nome,$endereco);
       header("location: /mvc20251/cliente/lista?info=1");
    }

    public function formulario()
    {
     
       $this->template->layout("\\public\\cliente\\form.php");
    }
    public function alterarForm()
    {
        $id=$_GET["id"];
        $service = new ClienteService();
        $resultado =$service->listarId($id);
        
       $this->template->layout("\\public\\cliente\\form.php",$resultado);
    }
}
