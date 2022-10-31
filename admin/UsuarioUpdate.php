<?php
session_start();
require_once "../user.php";

if(isset($_POST) && isset($_GET)){
    //valido que lleguen todos los datos
    
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;    
    $correo =isset($_POST['correo']) ? $_POST['correo'] : false; 
    $psw = isset($_POST['password']) ? $_POST['password'] : false;
    
    // solo se pude guardar el ausuario si llegan todos los datos
    if($nombre&&$apellido&&$correo&&$psw){
         //echo 'entroo';
        //llamo al modelo
        $usuario = new User();
        //seteo los valores

        $id= $_GET['id'];

        $usuario->setId($id);

        $usuario->setNombre($nombre);
        $usuario->setApellido($apellido);        
        $usuario->setCorreo($correo);
        $usuario->setPassword($psw);


        $upd = $usuario->update();



        if($upd){

            header("Location:viewUsuarios.php");
            exit();
        }
    }
}





?>