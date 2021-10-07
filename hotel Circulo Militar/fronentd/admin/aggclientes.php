<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Agregar clientes</title>
 	<!-- bootstrap 5 css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/estilocartas.css">
  <link rel="stylesheet" type="text/css" href="../css/do.css">
  <link rel="stylesheet" type="text/css" href="../css/all.css">

</head>
<body data-dark>
  
  <div>

  <form class="row g-3" action="../../backend/aggcli.php" method="POST">

    <!--primera fila-->
  <div class="col-md-3">
    <label for="nom1" class="form-label text-center">Primer nombre</label>
    <input type="text" class="form-control" id="nom1" required minlength="2" maxlength="30" name="nom1" placeholder="Primer nombre" maxlength="30" required>
  </div>
  <div class="col-md-3">
    <label for="nom2" class="form-label text-center">Segundo nombre</label>
    <input type="text" class="form-control" id="nom2"  minlength="2" maxlength="30" name="nom2" placeholder="Segundo nombre" maxlength="30" >
  </div>
  <div class="col-md-3">
    <label for="ape1" class="form-label text-center">Primer apellido</label>
    <input type="text" class="form-control" id="ape1" required minlength="2" maxlength="30" name="ape1" placeholder="Primer apellido" maxlength="30" required>
  </div>
  <div class="col-md-3">
    <label for="ape2" class="form-label text-center">Segundo apellido</label>
    <input type="text" class="form-control" id="ape2"  minlength="2" maxlength="30" name="ape2" placeholder="Segundo apellido" maxlength="30" >
  </div>

  <!--segunda fila-->
  <div class="col-md-3">
    <label for="ced" class="form-label text-center">Cedula</label>
    <input type="text" class="form-control" pattern="([0-9]{7,9})$" minlength="8" maxlength="8"id="ced" name="ced" placeholder="Cedula"  >
  </div>
  <div class="col-md-3">
    <label for="correo" class="form-label">Email</label>
    <input type="email" class="form-control" id="correo" name="correo" placeholder="example@gmail.com" maxlength="50">
  </div>
  <div class="col-md-3">
    <label for="tel1" class="form-label">Telefono movil</label>
    <input type="text" class="form-control" id="tel1" name="tel1"  placeholder="00000000000" maxlength="11" required>
  </div>
  <div class="col-md-3">
    <label for="tel2" class="form-label">Telefono fijo</label>
    <input type="text" class="form-control" id="tel2" name="tel2" placeholder="00000000000" maxlength="11">
  </div>

  <!--tercera fila-->
  <div class="col-md-3">
    <label for="fky_tcli" class="form-label">Tipo de cliente</label>
    <select id="fky_tcli" name="fky_tcli" class="form-select" required>
      <option>Seleccionar</option>
      <?php
      require '../../backend/exticli.php'; 
      while($tic=mysqli_fetch_array($ti_cli))
      {
       ?>
      <option value="<?php echo $tic['id_tcli'] ?>"><?php echo $tic['nom_tcli'] ?></option>
    <?php } ?>
    </select>
  </div>

  <div class="col-md-3">
    <label for="pais" class="form-label">Pais/Ciudad</label>
    <input type="text" class="form-control" id="pais"  name="pais" placeholder="Pais/Ciudad" maxlength="30" required>
  </div>

  <div class="col-md-3">
    <label for="pro" class="form-label">Profesion</label>
    <input type="text" class="form-control" id="pro"  name="pro" placeholder="Ingeniero" maxlength="30" required>
  </div>

  <div class="col-md-3">
    <label for="aco" class="form-label">Acompañantes</label>
    <input type="text" class="form-control" id="aco"  name="aco" placeholder="Opcional" maxlength="80">
  </div>

  <div class="col-12 pt-4" align="center">
    <button type="submit" class="btn-lg btn-primary col-7" id="enviar" name="enviar">Registrar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></button>
  </div>
</form>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>




  