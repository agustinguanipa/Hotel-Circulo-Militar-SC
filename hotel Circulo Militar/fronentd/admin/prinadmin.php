<?php 

session_start();

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<title>Administrador</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-utilities.css">
	<link rel="stylesheet" type="text/css" href="../css/estilocartas.css">
  	<link rel="stylesheet" type="text/css" href="../css/do.css">
  	<link rel="stylesheet" type="text/css" href="../css/all.css">
</head>

<body>

<div class="row">
		<?php 
			include 'navb.php';
			echo "<div id='sidebar' class='col-md-2'>";
				include 'navb-lat.php';
			echo "</div>";
		?>
<main style="
background-image: url(https://photos.worldtravelserver.com/photo/38352/large/38100069.jpg);
background-repeat: no-repeat;
background-size: cover;
opacity:0.9;">

<section class="py-5 text-center container">
	<div class="row py-lg-5"  style="color: black;" container-body>
			<div class="col-lg-12 col-md-8 mx-auto" style="background:white; border-radius: 20px;opacity:0.9;"  >
			<h1>¡Bienvenido al Modulo de Administrador</h1>
			<p class="lead text-muted">Su función principal es poder controlar todo lo corespondiente a todo el hotele circulo militar</p>
			</div>
	</div>
</section>

<div style="background:white; border-radius: 20px; opacity:0.9;" class="py-5 text-center container">
    <h1>Funciones</h1>
	<h3 class="text-center"  > * Agregar y Consultar Clientes </h3>
	<h4 class="text-center" > * Consultar y Manejar Habitaciones </h4>
	<h4 class="text-center" > * Realizar Reservaciones </h4>
	<h4 class="text-center" > * Consultar Pagos</h4>
	<h4 class="text-center" > * Consultar Servicios </h4>
	<h4 class="text-center" > * Cargar y Exportar Archivos </h4>
	<h4 class="text-center" > * Gestionar Articulos </h4>
	<h4 class="text-center" > * Gestionar Servicios </h4>
	<h4 class="text-center" > * Gestionar Usuarios </h4>
</div>


<br>
<br>


</main>



<footer>					  				
<div class="footer">					
	<?php 							
		include 'footer.php';							
	?>
	</div>
</footer>
</div>



  <script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
  <script src="../js/eje.js" type="module"></script>
  <script type="text/javascript" src="../js/all.js"></script>
  
<!-- Aqui debe ir el Footer -->


</div>
</div>


<script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../js/eje.js" type="module"></script>
<script type="text/javascript" src="../js/all.js"></script>
</body>

</html>