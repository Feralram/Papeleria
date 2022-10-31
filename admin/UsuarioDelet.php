<?php
session_start();
require_once "../user.php";

if(isset($_GET)){
    $id= $_GET['id'];
    $usu = new User();

    $usu->setId($id);

    $usus=  $usu->delete();
    
    if($usus==1){
        echo "eliminacion correcta";
        
        header("Location:viewUsuarios.php");
        exit();
    }


}



?>