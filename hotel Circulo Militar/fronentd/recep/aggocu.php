
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Agregar habitaciones</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-utilities.css">
  <link rel="stylesheet" type="text/css" href="../css/do.css">
  <link rel="stylesheet" type="text/css" href="../css/all.css">

</head>
<body >
  
  <div class="container pt-lg-5" >


  <form class="row g-3" action="../../backend/aggocuprec.php?cod=<?php echo $_REQUEST["cod"]; ?>" method="POST">
  <h2  >Habitacion <?php echo $_REQUEST["cod"]; ?></h2>
    <!--primera fila-->
  <div class="col-md-9" >
    <label for="ced" class="form-label text-center" style="margin-left: 50px;">Cliente</label>
    <input type="text" class="form-control" id="ced" name="ced" placeholder="Cedula de identidad" maxlength="9" required>
  </div>
 
  
  

  

  <div class="col-12 pt-4">
    <button type="submit" class="btn-lg btn-primary col-7" id="enviar" name="enviar">Ocupar <i class="fas fa-save"></i></button>
  </div>
</form>

</div>
<script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../js/eje.js" type="module"></script>
<script type="text/javascript" src="../js/all.js"></script>

</body>
</html>




  