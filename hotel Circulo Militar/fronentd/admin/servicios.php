<?php 

session_start();

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Servicios</title>
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
  <h2 class="text-center" > Modulo Servicios </h2>
	<div class="row row-cols-1 row-cols-md-3 g-4">

    <!-- carta AGG -->
    
  <div class="col-4" style="margin-left: 200px; margin-top: 100px;"data-bs-toggle="modal" data-bs-target="#mimodal1">
    
    <div class="card h-100">
      <img src="../img/agregar.jpg" class="card-img-top " alt="servicio">
      <div class="card-body">
        <h5 class="card-title text-center">Agregar Servicios <i class="fas fa-plus-circle"></i></h5>
      </div>
    </div>
  </a>
  </div>
   
<!-- carta consulta -->
  <div class="col-4" style="margin-top: 100px;">
    <a href="cser.php" title="Servicio">
    <div class="card h-100">
      <img src="../img/listar.jpg" class="card-img-top " alt="Consultar usuarios">
      <div class="card-body">
        <h5 class="card-title text-center">Consultar Servicios<i class="fas fa-clipboard-list"></i></h5>
      </div>
    </div>
      </a>
  </div>
</div>
<!-- Modal -->
<div class="modal fade container" id="mimodal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-xl" style="margin-left: 130px;">
    <div class="modal-content">
      <div class="modal-header" >
        <h5 class="modal-title" id="exampleModalLabel" style="color: black; margin-left:400px;">Agregar Servicio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="color: black;">
      <?php 
        include 'aggser.php';
      ?>
      </div>
    </div>
  </div>
</div>
</div>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../js/eje.js" type="module"></script>
<script type="text/javascript" src="../js/all.js"></script>
</html>