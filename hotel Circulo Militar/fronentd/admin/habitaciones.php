<?php 

session_start();

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Usuarios</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="../css/estilocartas.css">
  <link rel="stylesheet" type="text/css" href="../css/do.css">
  <link rel="stylesheet" type="text/css" href="../css/all.css">
</head>
<body data-dark>

<?php 
  include 'navb.php';
  include 'navb-lat.php';
  ?>
	<div class="container" style="margin-left:200px;">
		

  <h2 class="text-center" > Modulo Habitaciones </h2>

	  <div class="row row-cols-1 row-cols-md-3 g-4" >

    <!-- carta habitacion -->
    
     <div class="col-4" style=" margin-top: 150px;" data-bs-toggle="modal" data-bs-target="#mimodal2">
    
      <div class="card h-100">
       <img src="../img/agregar.jpg" class="card-img-top " alt="clientes">
           <div class="card-body" style="color:black;">
        <h5 class="card-title text-center" >Agregar Habitaciones <i class="fas fa-plus-circle"></i></h5>
           </div>
      </div>
  </a>
    </div>
   
<!-- carta consulta -->
  <div class="col-4" style="margin-top: 150px;">
    <a href="verhab.php" title="Personal">
    <div class="card h-100">
      <img src="../img/listar.jpg" class="card-img-top " alt="Consultar usuarios">
      <div class="card-body">
        <h5 class="card-title text-center">Consultar Habitaciones <i class="fas fa-clipboard-list"></i></h5>
      </div>
     </div>
      </a>
  </div>

  <div class="col-4" style="margin-top: 150px;">
    <a href="articulos.php" title="Agregar habitaciones">
    <div class="card h-100">
      <img src="../img/agregar.jpg" class="card-img-top " alt="clientes">
      <div class="card-body">
        <h5 class="card-title text-center">Gestion de articulos <i class="fas fa-plus-circle"></i></h5>
      </div>
    </div>
  </a>
  </div>
</div>
</div>






<!-- modal de prueba  -->
<div class="modal fade" id="mimodal2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel" style="margin-left:120px;">Agregar Habitaciones</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php 
        include 'agghab.php';
      ?>
      </div>
      
    </div>
  </div>
</div>





</div>
</div>
<script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../js/eje.js" type="module"></script>
<script type="text/javascript" src="../js/all.js"></script>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>