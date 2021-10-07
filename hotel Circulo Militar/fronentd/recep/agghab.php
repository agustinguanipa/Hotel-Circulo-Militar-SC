
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Agregar habitaciones</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/do.css">
  <link rel="stylesheet" type="text/css" href="../css/all.css">

</head>
<body >
  
  <div class="container pt-lg-2" style="margin-top: 40px;">

  <form class="row g-3" action="../../backend/agghab.php" method="POST">

    <!--primera fila-->
 <div>
  <div class="col-md-8">
    <label for="id" class="form-label text-center">Numero de habitacion</label>
    <input type="number" class="form-control" id="id" name="id" placeholder="Numero" required>
  </div>
  
  
  <div>
  <div class="col-md-8">
    <label for="fky_tih" class="form-label">Tipo de habitacion</label>
    <select id="fky_tih" name="fky_thi" class="form-select" required>
      <option>Seleccionar</option>
      <?php
      require '../../backend/extihab.php'; 
      while($tic=mysqli_fetch_array($chab))
      {
       ?>
      <option value="<?php echo $tic['cod_tih'] ?>"><?php echo $tic['nom_tih'] ?></option>
    <?php } ?>
    </select>
  </div>
  </div>


  <div>
  <div class="col-md-8">
    <label for="des" class="form-label text-center">Descripcion</label>
    <input type="text" class="form-control" id="des" name="des" placeholder="descripcion" maxlength="60">
  </div>
  <div class="col-md-8">
    <label for="pre" class="form-label text-center">Precio</label>
    <input type="number" class="form-control" id="precio" name="precio" placeholder="precio" required>
  </div>
  </div>
 
  <div class="col-12 pt-4" >
    <button type="submit" class="btn-lg btn-dark col-7" id="enviar" name="enviar">Guardar <i class="fas fa-save"></i></button>
  </div>
</form>
</div>
</div>



</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>




