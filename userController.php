<?php
if(isset($_POST['submit'])){
    $usuario =  $_POST['usuario'];
    $psw = $_POST['password'];
    if(empty($usuario) || empty($psw)){
        echo "<script type='text/javascript'>alert(''Nombre de usuario o contraseña vacios')</script>";
    }else{
        $user = new User;
        $user->setCorreo($usuario);
        $user->setPassword($psw);
        if($user->login()==2){
            session_start();
            $_SESSION['usuario'] = $user->getCorreo();
            
            header('Location: user/usuario.php');
            exit();
        }else if($user->login()==1){
            session_start();
            $_SESSION['usuario'] = $user->getCorreo();
            
            header('Location: admin/inicioAdmin.php');
            exit();
        }else{
            echo "<script type='text/javascript'>alert(''Usuario no existe')</script>";
        }
    }
}
?>