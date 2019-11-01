<?php

    class Usuario {

        private $idusuario;
        private $deslogin;
        private $dessenha;
        private $dtcadastro;

        public function getIdusuario(){
            return $this->idusuario;
        }
        public function setIdusuario($value){
            $this->idusuario=$value;
        }
        public function getDeslogin(){
            return $this->deslogin;
        }
        public function setDeslogin($value){
            $this->deslogin=$value;
        }
        public function getDesenha(){
            return $this->dessenha;
        }
        public function setDessenha($value){
            $this->dessenha=$value;
        }
        public function getDtcadastro(){
            return $this->dtcadastro;
        }
        public function setDtcadastro($value){
            $this->dtcadastro=$value;
        }
        public function loadById($id){
            $sql = new Sql();

            $result = $sql->select("select * from tb_usuarios where idusuario = :ID",array(":ID"=>$id));

            if(count($result) > 0 ) {
                $row = $result[0];
                $this->setIdusuario($row['idusuario']);
                $this->setDeslogin($row['deslogin']);
                $this->setDessenha($row['dessenha']);
                $this->setDtcadastro(new DateTime($row['dtcadastro']));
            }
        }
        public static function getList(){
            $sql = new Sql();

            return $sql->select("Select * from tb_usuarios order by deslogin;");
            
        }
        public static function search($login){
            $sql = new Sql();

            return $sql->select("Select * from tb_usuarios where deslogin like :SEARCH order by deslogin;",
                        array(':SEARCH' => "%". $login ."%"));
        }
        public function __toString()
        {
            return json_encode(array(
                "idusuario"=>$this->getIdusuario(),
                "deslogin"=>$this->getDeslogin(),
                "dessenha"=>$this->getDesenha(),
                "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
            ));
        }
    }

    ?>