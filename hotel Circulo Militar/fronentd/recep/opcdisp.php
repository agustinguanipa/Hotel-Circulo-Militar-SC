<?php 

session_start();

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Gestion habitacion</title>
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
  ?>

	<div class="container">
		 <h2 class="text-center" >Habitacion <?php echo $_REQUEST["cod"]; ?></h2>

	<div class="row row-cols-1 row-cols-md-3 g-4">

    <!-- carta AGG -->
    
  <div class="col-3" style="margin-left: 200px; margin-top: 30px;" >
    <a href="aggocupre.php?cod= <?php echo $_REQUEST["cod"]; ?>" title="Agregar usuarios"  data-bs-toggle="modal" data-bs-target="#mimodal1">
    <div class="card h-100">
      <img src="../img/agregar.jpg" class="card-img-top " alt="clientes">
      <div class="card-body">
        <h5 class="card-title text-center">Ocupar <i class="fas fa-plus-circle"></i></h5>
      </div>
    </div>
  </a>
  </div>
   
<!-- carta consulta -->
  <div class="col-3" style="margin-top: 30px;">
    <a href="../../backend/manhabre.php?cod=<?php echo $_REQUEST["cod"]; ?>" title="Mantenimiento">
    <div class="card h-100">
      <img src="../img/listar.jpg" class="card-img-top " alt="Consultar usuarios">
      <div class="card-body">
        <h5 class="card-title text-center">Realizar mantenimiento <i class="fas fa-clipboard-list"></i></h5>
      </div>
    </div>
      </a>
  </div>

  <!-- carta consulta -->
  <div class="col-3" style="margin-left: 350px;" >
    <a href="chart.php?cod=<?php echo $_REQUEST["cod"]; ?>" title="Personal">
    <div class="card h-100">
      <img src="../img/listar.jpg" class="card-img-top " alt="Consultar usuarios">
      <div class="card-body">
        <h5 class="card-title text-center">Consultar de Articulos <i class="fas fa-clipboard-list"></i></h5>
      </div>
    </div>
      </a>
  </div>
</div>



<!-- Modal -->
<div class="modal  container" id="mimodal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-xl modal-backgraund-white" style="margin-left: 130px;">
    <div class="modal-content modal-backgraund-light">
      <div class="modal-header" style="background-color:#4F99FE;"   >
        <h5 class="modal-title" id="exampleModalLabel" style="color: black; margin-left:400px;">Registrar Cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="color: black;">
      <?php 
        include 'aggocu.php';
      ?>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="mimodal1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel" style="margin-left:120px;">Agregar Reservacion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php 
        include 'aggocu.php';
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