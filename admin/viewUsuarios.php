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
  <title>La Esquinita Creativa | Administrador</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

  <!-- Estilos Css -->
  <link rel="stylesheet" href="../css/styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
        <h1><a href="inicioAdmin.html">La Esquinita Creativa</a></h1>
      </ul>
    </div>
        <span class="btn-menu"><i class="fas fa-bars"></i></span>
      </div>
      
      <div class="list-container">
        <ul class="lists"> 
        <li><a href="inicioAdmin.php" >Inicio</a></li>
          <li><a href="viewUsuarios.php" class="active">Usuarios</a></li>
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
    <div class="admin_image">
      <div class="ejeZfooter">
        <div class="footer-content">
          <div class="welcome">
            <div id="contenedor">

              <div id="contenedorcentrado">
                
              <table class="table">
                <thead>
                <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CORREO</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    require_once "../user.php";
                    $usuario = new User();
                    $usu = $usuario->ListadoUsuarios();
                    for ($i = 0; $i < COUNT($usu); $i++) : ?>
                            <tr>
                            <td><?= $usu[$i]['idusuario'] ?></td>
                            <td><?= $usu[$i]['nombre']  ?> <?= $usu[$i]['apellido'] ?></td>
                            <td><?= $usu[$i]['correo'] ?></td>
                            <td>
                                <a href="UsuarioDelet.php?id=<?= $usu[$i]['idusuario'] ?>">Eliminar</a>
                                <a href="editarUsuario.php?id=<?= $usu[$i]['idusuario'] ?>">Editar</a>



                            

                            
                            </td>
                            
                    </tr>
                    <?php endfor; ?>
                    </tbody>
              </table>

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
  <script src="../js/app.js"></script>

</body>

</html>
<?php 
}else{
  
  header('Location: ../login.php');
  exit();
}
?>