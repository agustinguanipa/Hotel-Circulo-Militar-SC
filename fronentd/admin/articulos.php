<?php 

session_start();

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Articulos</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-utilities.css">
	<link rel="stylesheet" type="text/css" href="../css/estilocartas.css">
  <link rel="stylesheet" type="text/css" href="../css/do.css">
  <link rel="stylesheet" type="text/css" href="../css/all.css">
</head>
<body data-dark>
	<?php include 'navb.php';
  include 'menudesplegable.php'; ?>
	<div class="container">
		
    		
  <br>
  <h2 class="text-center" > Modulo articulos </h2>
	<div class="row row-cols-1 row-cols-md-3 g-4">

    <!-- carta AGG -->
    
  <div class="col-6" style="margin-left: 200px; margin-top: 100px;">
    <a href="aggart.php" title="Agregar articulo">
    <div class="card h-100">
      <img src="../img/agregar.jpg" class="card-img-top " alt="servicio">
      <div class="card-body">
        <h5 class="card-title text-center">Agregar articulos <i class="fas fa-plus-circle"></i></h5>
      </div>
    </div>
  </a>
  </div>
   
<!-- carta consulta -->
  <div class="col-6" style="margin-top: 100px;">
    <a href="cart.php" title="Servicio">
    <div class="card h-100">
      <img src="../img/listar.jpg" class="card-img-top " alt="Consultar usuarios">
      <div class="card-body">
        <h5 class="card-title text-center">Consultar articulos<i class="fas fa-clipboard-list"></i></h5>
      </div>
    </div>
      </a>
  </div>
</div>
</div>

<script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../js/eje.js" type="module"></script>
<script type="text/javascript" src="../js/all.js"></script>


</body>
</html>