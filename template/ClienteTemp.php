<?php

namespace template;

class ClienteTemp implements ITemplate
{
    public function cabecalho()
    {
        echo "<div> Cabeçalho </div>";
    }
    public function rodape()
    {
        echo "<div> Rodapé </div>";
    }
    public function layout($caminho, $parametro = null)
    {
        $this->cabecalho();
        include $_SERVER["DOCUMENT_ROOT"]."\\mvc20251".$caminho;
        $this->rodape();
    }
}
