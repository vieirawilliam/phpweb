<?php

class Usuario
{

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function __construct($login = "", $password = "")
    {
        $this->setDeslogin($login);
        $this->setDessenha($password);
    }
    public function getIdusuario()
    {
        return $this->idusuario;
    }
    public function setIdusuario($value)
    {
        $this->idusuario = $value;
    }
    public function getDeslogin()
    {
        return $this->deslogin;
    }
    public function setDeslogin($value)
    {
        $this->deslogin = $value;
    }
    public function getDesenha()
    {
        return $this->dessenha;
    }
    public function setDessenha($value)
    {
        $this->dessenha = $value;
    }
    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }
    public function setDtcadastro($value)
    {
        $this->dtcadastro = $value;
    }
    public function loadById($id)
    {
        $sql = new Sql();

        $result = $sql->select("select * from tb_usuarios where idusuario = :ID", array(":ID" => $id));

        if (count($result) > 0) {
            $this->setData($result[0]);
        }
    }
    public static function getList()
    {
        $sql = new Sql();

        return $sql->select("Select * from tb_usuarios order by deslogin;");
    }
    public static function search($login)
    {
        $sql = new Sql();

        return $sql->select(
            "Select * from tb_usuarios where deslogin like :SEARCH order by deslogin;",
            array(':SEARCH' => "%" . $login . "%")
        );
    }
    public function __toString()
    {
        return json_encode(array(
            "idusuario" => $this->getIdusuario(),
            "deslogin" => $this->getDeslogin(),
            "dessenha" => $this->getDesenha(),
            "dtcadastro" => $this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }
    public function login($login, $password)
    {
        $sql = new Sql();

        $result = $sql->select("select * from tb_usuarios where deslogin = :LOGIN and dessenha = :PASSWORD", array(
            ":LOGIN" => $login,
            ":PASSWORD" => $password
        ));

        if (count($result) > 0) {
            $this->setData( $result[0]);
        } else {
            throw new Exception("Login e senha invalidos");
        }
    }
    public function setData($data)
    {
        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }
    public function insert()
    {
        $sql = new Sql();

        $result = $sql->select(
            "call sp_usuarios_insert(:LOGIN, :PASSWORD)",
            array(
                ':LOGIN' => $this->getDeslogin(),
                ':PASSWORD' => $this->getDesenha()
            ));

        if(count($result)> 0){
            $this->setData($result[0]);
        }
    }
    public function update($login, $password){
            
            $this->setDeslogin($login);
            $this->setDessenha(($password)); 
        
            $sql = new Sql();

            $sql->query("Update tb_usuarios set deslogin= :LOGIN, dessenha = :PASSWORD where idusuario = :ID", array(
                'LOGIN'=>$this->getDeslogin(),
                'PASSWORD'=>$this->getDesenha(),
                'ID'=>$this->getIdusuario()
            ));


    }
    public  function delete()
    {
        $sql = new Sql();

        $sql->query("Delete from tb_usuarios where idusuario = :ID", array(
            'ID'=>$this->getIdusuario()
        ));

        $this->setIdusuario(0);
        $this->setDeslogin("");
        $this->setDessenha("");
        $this->setDtcadastro(new Datetime());

    }

}



?>