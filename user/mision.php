<?php
session_start();
if(isset($_POST['cerrarSesion'])){
  unset($_SESSION['usuario']);
  
  header('Location: ../login.php');
  exit();
}
?>

<?php if(isset($_SESSION['usuario'])){ ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>La Esquinita Creativa | Visión</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

  <!-- Estilos Css -->
  <link rel="stylesheet" href="../css/styles.css">

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
        <h1><a href="usuario.html">La Esquinita Creativa</a></h1>
        <span class="btn-menu"><i class="fas fa-bars"></i></span>
      </div>

      <div class="list-container">
      <ul class="lists">
      <li><a href="usuario.php" class="active">Inicio</a></li>
          <!-- <li><a href="nosotros.php">Nosotros</a></li>
          <li><a href="servicio.php">Servicios</a></li>
          <li><a href="mision.php">Mision</a></li>
          <li><a href="vision.php">Vision</a></li> -->
          <li><a href="pedido.html">Pedido</a></li>
          <li><a href="fotos.php">Fotos</a></li>
          <li><a href="contacto.php">Contacto</a></li>
          <li><a href="admins.html">Admins</a></li>
          <li><a href="controlAdmins.html">Tabla Admins</a></li>
          <li><form action="" method="POST"><button type="submit" name="cerrarSesion">Cerrar Sesion</button></form></li>
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
    <div class="principal bg-img-msn">


      <div class="ejeZprincipal">
        <div class="principal-content">


          <div class="formulario-content">
            <section class="testimonios">
              <div class="testimonios-title">
                <h2>Misión</h2>
                <hr>
              </div>
              <div class="box-testimonio">
                <div class="mivision-img"><img src="../img/msn.jpg" alt=""></div>
                <div class="testimonio-text">
                  <h4>Nuestra principal Misión</h4>
                  <p>Proveer a padres de familia,alumnado y profesorado material y accesorios escolares y de oficina
                    personalizados.</p>
                </div>
              </div>
            </section>
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

<?php 
}else{
  
  header('Location: ../login.php');
  exit();
}
?>