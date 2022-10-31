<?php
require_once "user.php";
if(isset($_POST)){
    //valido que lleguen todos los datos
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
    $correo =isset($_POST['correo']) ? $_POST['correo'] : false; 
    $contrasenia = isset($_POST['password']) ? $_POST['password'] : false;
    // solo se pude guardar el ausuario si llegan todos los datos
    if($nombre&&$apellido&&$correo&&$contrasenia){
         //echo 'entroo';
        //llamo al modelo
        $usuario = new User();
        //seteo los valores

        
        $usuario->setNombre($nombre);
        $usuario->setApellido($apellido);
        $usuario->setCorreo($correo);
        $usuario->setPassword($contrasenia);


        $save = $usuario->save();



        if($save==1){
            $message = "REGISTRO EXITOSO!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }else{
            $message = "REGISTRO FALLIDO! Correo registrado";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>La Esquinita Creativa | Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

  <!-- Estilos Css -->
  <link rel="stylesheet" href="css/styles.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Red+Hat+Text:400,500,700&display=swap" rel="stylesheet">

</head>

<body>

  <!-- Ir Arriba -->
  <div class="go-top">
    <span class="fas fa-angle-up"></span>
  </div>

  <!-- Menu de Navegacion -->
  <header id="header">
    <nav class="menu">
      <div class="logo-box">
        <h1><a href="index.html">La Esquinita Creativa</a></h1>
        <span class="btn-menu"><i class="fas fa-bars"></i></span>
      </div>

      <div class="list-container">
      <ul class="lists">
          <li><a href="index.html">Inicio</a></li>
          <li><a href="nosotros.html">Nosotros</a></li>
          <li><a href="servicio.html">Servicios</a></li>
          <li><a href="mision.html">Mision</a></li>
          <li><a href="vision.html">Vision</a></li>
          <li><a href="fotos.html">Fotos</a></li>
          <li><a href="contacto.html">Contacto</a></li>
          <li><a href="login.php" class="active">Login</a></li>
          <li>
            <div class="buscar">
              <input type="text" placeholder="Buscar" required />

              <div class="btn">
                <i class="fas fa-search icon"></i>
              </div>
            </div>
          </li>
        </ul>
      </div>

    </nav>
  </header>

  <main>
    <div class="principal bg-img-lgn">
      <div class="ejeZfooter">
        <div class="footer-content">
          <div class="welcome">
            <div id="contenedor">

              <div id="contenedorcentrado">
                <div id="login">
                <div class="titulo">
                    Registro
                  </div>
                  <form id="loginform" action="" method="post">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" type="text" name="nombre" placeholder="Nombre" required>
                    <label for="apellido">Apellido</label>
                    <input id="apellido" type="text" name="apellido" placeholder="Apellidos" required>
                    <label for="correo">Correo electronico</label>
                    <input id="correo" type="text" name="correo" placeholder="Correo electronico " required>                
                    <label for="password">Contraseña</label>
                    <input id="password" type="password" placeholder="Contraseña" name="password" required>
                    <button type="submit" name="submit" title="Ingresar" name="Ingresar">Registrarse</button>
                  </form>
                  <div class="pie-form">
                            <a href="login.php">Regresar</a>
                            <!-- <a href="#">¿No tienes Cuenta? Registrate</a>
                            <hr>
                            <a href="#">« Volver</a> -->
                        </div>

                </div>

               
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="ejeZfooter">
          <div class="footer-content">
            <div class="footer-text">
              <p>&copy; Corazón de Papel - 2022 | Todos los derechos reservados.</p>
            </div>

          </div>
        </div>
      </footer>
    </div>
  </main>

  <!-- Scripts -->
  <script src="https://kit.fontawesome.com/35db202371.js"></script>
  <script src="js/app.js"></script>

</body>

</html>
