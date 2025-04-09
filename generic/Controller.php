<?php
namespace generic;
class Controller{
    private $arrChamadas=[];
    public function __construct()
    {
        $this->arrChamadas = [
            "cliente/lista" =>new Acao("Cliente","listar")
           
        ];
    }

    public function verificarChamadas($rota){
       
        if(isset($this->arrChamadas[$rota])){
            //acao da rota
            $acao = $this->arrChamadas[$rota];
            $acao->executar();
            return ;
        }

        echo "Rota não existe!";
    }
}