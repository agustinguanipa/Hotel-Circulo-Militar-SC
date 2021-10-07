
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Agregar servicios</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/do.css">
  <link rel="stylesheet" type="text/css" href="../css/all.css">

</head>
<body data-dark>
 
  <div class="container pt-lg-5" style="margin-top: 40px;">

  <form class="row g-3" action="../../backend/aggser.php" method="POST">

    <!--primera fila-->
  <div class="col-md-6">
    <label for="id" class="form-label text-center">Codigo de servicio</label>
    <input type="text" class="form-control" id="id"  name="id" placeholder="Codigo de servicio" maxlength="8" required>
  </div>

  <div class="col-md-6">
    <label for="fky_tse" class="form-label">Tipo de servicio</label>
    <select id="fky_tse"  name="fky_tse" class="form-select" required>
      <?php
      require '../../backend/tiposer.php'; 
      while($tiu=mysqli_fetch_array($tse))
      {
       ?>
      <option value="<?php echo $tiu['id'] ?>"><?php echo $tiu['nom_tse'] ?></option>
    <?php } ?>
    </select>
  </div>

  <div class="col-md-6">
    <label for="nom" class="form-label text-center">Nombre del servicio</label>
    <input type="text" class="form-control" id="nom"  name="nom" placeholder="Nombre del servicio" maxlength="30" required>
  </div>
  <div class="col-md-6">
    <label for="pre" class="form-label text-center">Precio del servicio</label>
    <input type="number" class="form-control" id="pre"  name="pre" placeholder="precio" required>
  </div>

  <!--segunda fila-->
  <div class="col-md-6">
    <label for="can" class="form-label text-center" style="margin-top: 6px; margin-left: 200px;">Cantidad</label>
    <input type="number" class="form-control" id="can"  name="can" placeholder="Cantidad" required style=" margin-left: 200px;">
  </div>
 
  <div class="col-12 pt-4" align="center">
    <button type="submit" class="btn-lg btn-primary col-7" id="enviar"  name="enviar" >Registrar <i class="fas fa-user-edit"></i></button>
  </div>
</form>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>




  