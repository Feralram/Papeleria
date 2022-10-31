<?php
session_start();
  if($_SESSION['usuario']){

    header('Location: user/usuario.php');
    exit();
  }
  
  include 'config/bd.php';
  include 'user.php';
  include 'userController.php';
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

  <link href="https://fonts.googleapis.com/css?family=Red+Hat+Text:400,500,700&display=swap" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
                  <form id="loginform" action="" method="post">
                  <?php
                                        if (isset($errorLogin)) {
                                            echo $errorLogin;
                                        }
                                        ?> 
                    <label for="usuario">Usuario</label>
                    <input id="usuario" type="text" name="usuario" placeholder="Usuario" required>

                    <label for="password">Contraseña</label>
                    <input id="password" type="password" placeholder="Contraseña" name="password" required>

                    <button type="submit" name="submit" title="Ingresar" name="Ingresar">Iniciar sesion</button>
                  </form>
                  <div class="pie-form">
                            <a href="Registro.php">Registro</a>
                            <!-- <a href="#">¿No tienes Cuenta? Registrate</a>
                            <hr>
                            <a href="#">« Volver</a> -->
                        </div>

                </div>

                <div id="derecho">
                  <div class="titulo">
                    Bienvenido
                  </div>
                  <hr>
                  <!-- <div class="pie-form">
                            <a href="#">¿Perdiste tu contraseña?</a>
                            <a href="#">¿No tienes Cuenta? Registrate</a>
                            <hr>
                            <a href="#">« Volver</a>
                        </div> -->
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