<?php

namespace Cliente;

class Cadastro extends \Cadastro  {
    public function registraVenda()
    {
       echo "Foi registrada uma venda para o cliente" . $this->getNome();
    }
}