<?php
include_once('config/bd.php');

class User{

    public function __construct()
    {
        $this->db = Database::connect();
    }


    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apaterno;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getIdRol(){
        return $this->idperfil;
    }
    public function getCorreo(){
        return $this->correo;
    }

    public  function setId($id)
    {
        $this->id = $id;
    }
    public  function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public  function setApellido($apaterno)
    {
        $this->apaterno = $apaterno;
    }
    public  function setPassword($password)
    {
        $this->password = $password;
    }
    public function setIdRol($idperfil)
    {
        $this->idperfil = $idperfil;
    }
    public  function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function login(){
        $sql = 'SELECT * 
        FROM usuarios u
        INNER JOIN roles r ON r.idrol = u.idrol
        WHERE correo = "'.$this->getCorreo().'" AND contrasenia = "'.$this->getPassword().'" ';
        //die($sql);
        $result = $this->db->query($sql);
        $numRows = $result->num_rows;
        if($numRows == 1){
            $fila = $result->fetch_assoc();
            if($fila['idrol']==1){
            return 1;
            }
            else if ($fila['idrol']==2){
            return 2;
            }
        }
        return false;
    }


    public function save()
    {
        $sql = "INSERT INTO papeleria.usuarios
        (nombre, apellido, correo, contrasenia, idrol)
        VALUES('" . $this->getNombre() . "', '" . $this->getApellido() . "', '" . $this->getCorreo() . "', '" . $this->getPassword() . "' , 2)";
        $this->db->query($sql);
        $this->db->close();
        return 1;
        

        
    }
    public function delete()
    {
        $sql = 
        "DELETE 
        FROM papeleria.usuarios
        WHERE idusuario = '" . $this->getId() . "' ";

        //die($sql);
        $this->db->query($sql);
        $this->db->close();
        return true;
    }
    public function update()
    {
        $sql = "UPDATE usuarios
        SET nombre='" . $this->getNombre() . "',apellido='" . $this->getApellido() . "',correo='" . $this->getCorreo() . "', contrasenia='" . $this->getPassword() . "'
        WHERE idusuario = '" . $this->getId() . "' ";

        //die($sql);
        $this->db->query($sql);
        $this->db->close();
        
        return 1;
    }
    public function GetUser()
    {
        $lista=null;
        $sql = "SELECT *
        FROM usuarios
        WHERE idusuario = '" . $this->getId() . "' ";
        
        if ($res=$this->db->query($sql))
        {
            while($list = $res->fetch_object()) 
            {
                      $lista[]=$list;
            }
            
            $res->close();
        }
        $this->db->close();
 
        $lista1 = json_decode(json_encode($lista), true);
        return $lista1;
    }
    public function ListadoUsuarios()
    {
        $lista=null;
        $sql = "SELECT *
        FROM usuarios
        ORDER BY idusuario ASC";
        
        if ($res=$this->db->query($sql))
        {
            while($list = $res->fetch_object()) 
            {
                      $lista[]=$list;
            }
            
            $res->close();
        }
        $this->db->close();
 
        $lista1 = json_decode(json_encode($lista), true);
        return $lista1;
    }


}

?>