<?php 

session_start();

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Usuarios</title>
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
   include 'navb-lat.php'; ?>
	<div class="container">
		
		
  <br>
  <h2 class="text-center" > Modulo Migración</h2>

	<div class="row row-cols-1 row-cols-md-3 g-4">

    <!-- carta AGG -->
    <div  class="col-6" style="margin-left: 200px; margin-top: 150px;"  data-bs-toggle="modal" data-bs-target="#mimodal1">
  <div  >
    <a  title="Agregar usuarios" data-toggle="modal" data-target="#myModal1" >
    <div class="card h-100" >
      <img src="../img/carga2.png" class="card-img-top " alt="clientes">
      <div class="card-body">
        <h5 class="card-title text-center">Cargar Datos <i class="fas fa-plus-circle"></i></h5>
      </div>
    </div>
  </a>
  </div>
  </div>
   
<!-- carta consulta -->
  <div class="col-6" style="margin-top: 150px;">
    <a href="../../backend/respaldartodo.php" title="Expotar">
    <div class="card h-100">
      <img src="../img/descarga1.jpg" class="card-img-top " alt="Consultar usuarios">
      <div class="card-body">
        <h5 class="card-title text-center">Exportar Datos <i class="fas fa-clipboard-list"></i></h5>
      </div>
    </div>
      </a>
  </div>
</div>

<!--knskln -->






<!-- modal de prueba  -->
<div class="modal fade" id="mimodal1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel" style="margin-left:120px;">Agregar Archivo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Por Favor Seleccione un Archivo Para Cargarlo a La Base De Datos</p>
      <?php 
        include 'upmigra.php';
      ?>
      </div>
      
    </div>
  </div>
</div>
  







</div>

<script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../js/eje.js" type="module"></script>
<script type="text/javascript" src="../js/all.js"></script>


</body>
</html>