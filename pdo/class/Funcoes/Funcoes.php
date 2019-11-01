<?php

    namespace Funcoes;
    
    class Funcoes{

        private $senha;
        
        #FUNÇÃO DE CODIFICAR SENHA
        public function codIF($texto):string
        {
            # code...
            $n=0;
            $this->senha="";

            for ($n = strlen($texto) - 1 ; $n >= 0 ; $n--) {
                $this->senha .= chr(ord(substr($texto,$n,1))-20); 
            }
            return $this->senha;
        }

        #FUNÇÃO DE DESCODIFICAR SENHA
        public function decodIF($texto):string
        {
            # code...
            $n=0;
            $this->senha="";

            for ($n = strlen($texto) - 1 ; $n >= 0 ; $n--) {
                $this->senha .= chr(ord(substr($texto,$n,1))+20); 
            }            
            return $this->senha;
        }

       
    }
