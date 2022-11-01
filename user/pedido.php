<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario de Productos</title>
		<meta name="viewport" >
		<link rel="stylesheet" href="../fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/styles.css">
	</head>
	<body>
	<!-- Menu de Navegacion -->
	<header id="header">
    <nav class="menu">
      <div class="logo-box">
        <h1><a href="index.html">La Esquinita Creativa</a></h1>
        <span class="btn-menu"><i class="fas fa-bars"></i></span>
      </div>

      <div class="list-container">
        <ul class="lists">
		<li><a href="usuario.php" class="active">Inicio</a></li>
          <!-- <li><a href="nosotros.php">Nosotros</a></li>
          <li><a href="servicio.php">Servicios</a></li>
          <li><a href="mision.php">Mision</a></li>
          <li><a href="vision.php">Vision</a></li> -->
          <li><a href="pedido.php">Pedido</a></li>
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
		<div class="imagencuadro">
			<div class="cuadroContenido">
				<div class="image-holder">
					<img src="../images/registration-form-6.jpg" alt="">
				</div>
				<form action="">
					<h3>PERSONALIZA TUS ARTÍCULOS DE PAPELERÍA</h3>
					<div class="form-row">
						<input type="text" class="form-control" placeholder="Nombre del pedido">
						<input type="text" class="form-control" placeholder="Código Postal">
					</div>
					<div class="form-row">
						<input type="text" class="form-control" placeholder="Dirección">
						<div class="form-holder">
							<select name="" id="" class="form-control">
								<option value="" disabled selected>Elige tu Diseño</option>
								<option value="class 01">Naruto</option>
								<option value="class 02">Futbol</option>
								<option value="class 03">Dragon Ball</option>
								<option value="class 02">Mi Villano favorito</option>
								<option value="class 03">Dora la Exploradora</option>
								<option value="class 02">Plaza Sesamo</option>
								<option value="class 03">Cars</option>
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
					</div>
					<textarea name="" id="" placeholder="Descripción de lo pedido (Que articulo deseas: libretas,plumas,gomas,etc)" class="form-control" style="height: 130px;"></textarea>
					<button>Ordenar pedido
					</button>
				</form>	
			</div>
		</div>
	</body>
</html>