<?php 

session_start();

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Personal</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/estilocartas.css">
  <link rel="stylesheet" type="text/css" href="../css/do.css">
  <link rel="stylesheet" type="text/css" href="../css/all.css">
</head>
<body data-dark>
	<?php include 'navb.php';
 include 'navb-lat.php'; ?>

	<div class="container">
	
  <br>
  <h2 class="text-center" style="margin-bottom: -100px;"> Agregar personal </h2>

  <!-- carta personal -->
	<div class="row row-cols-1 row-cols-md-3 g-4" >

    <!-- carta AGG -->
    
  <div class="col-6" style="margin-left: 200px; margin-top: 150px;" data-bs-toggle="modal" data-bs-target="#mimodal11">
    
    <div class="card h-100">
      <img src="../img/agregar.jpg" class="card-img-top " alt="personal">
      <div class="card-body" style="color:black;">
        <h5 class="card-title text-center">Agregar personal  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
      </svg></i></h5>
      </div>
    </div>
  
  </div>
   
<!-- carta consulta -->
  <div class="col-6" style="margin-top: 150px;">
    <a href="cper.php" title="consultar usuarios">
    <div class="card h-100">
      <img src="../img/listar.jpg" class="card-img-top " >
      <div class="card-body">
        <h5 class="card-title text-center">Consultar personal <i class="fas fa-clipboard-list"></i></h5>
      </div>
    </div>
      </a>
  </div>
</div>

<!-- Modal -->
<div class="modal fade container" id="mimodal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-xl" style="margin-left: 130px;">
    <div class="modal-content">
      <div class="modal-header" >
      <h5 class="modal-title" style="color: black;  Margin-left: 400px;" id="exampleModalLabel" style="color: black;">Agregar Personal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="color: black;">
      <?php 
        include 'aggusu.php';
      ?>
      </div>
    </div>
  </div>
</div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
