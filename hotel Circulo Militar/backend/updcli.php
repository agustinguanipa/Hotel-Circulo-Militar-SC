<?php 

  session_start();
  function conectar()
  {
      $host="localhost";
      $user="root";
      $pass="";
      $bd="hotelmod";
  
      $con=mysqli_connect($host,$user,$pass);
  
      mysqli_select_db($con,$bd);
  
      return $con;
  }
    
  $cone=conectar();

  $id=$_GET['ced'];

  $sql="SELECT * FROM cliente WHERE fky_per='$id'";
  $query=mysqli_query($cone,$sql);
  $row=mysqli_fetch_array($query);
  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cosultar clientes</title>
	<link rel="stylesheet" href="../fronentd/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../fronentd/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../fronentd/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="../fronentd/css/bootstrap-utilities.css">
	<link rel="stylesheet" type="text/css" href="../fronentd/css/estilocartas.css">
	<link rel="stylesheet" type="text/css" href="../fronentd/css/do.css">
	<link rel="stylesheet" type="text/css" href="../fronentd/css/all.css">
</head>
<body>


  <div class="container mt-5" style="margin-left: 50px;">
    <form action="../backend/update.php" method="POST" style="margin-left: 500px;margin-right:500px;margin-bottom: 15px; border-radius:50px ; border: 5px solid #3FBCE7;box-shadow: 5px 10px blue; " >
        
      
      <div class="col-md-7" style="margin-left: 80px;" >
        <label for="fky_tcli" class="form-label text-center">Tipo Cliente</label>
        <input type="text" class="form-control mb-3" name="fky_tcli" placeholder="Ciudad" value="<?php echo $row['fky_tcli']  ?>">
      </div>   

      <div class="col-md-7" style="margin-left: 80px;" >
        <label for="ciu_cli" class="form-label text-center">Ciudad del cliente</label>
        <input type="text" class="form-control mb-3" name="ciu_cli" placeholder="Ciudad" value="<?php echo $row['ciu_cli']  ?>">
      </div>
      
      <div class="col-md-7" style="margin-left: 80px;" >
        <label for="pro_cli" class="form-label text-center">Profesión del cliente</label>
        <input type="text" class="form-control mb-3" name="pro_cli" placeholder="Profesion" value="<?php echo $row['pro_cli']  ?>">
      </div>

      <div class="col-md-7" style="margin-left: 80px;" >
        <label for="aco_cli" class="form-label text-center">Acompañante del cliente</label>
        <input type="text" class="form-control mb-3" name="aco_cli" placeholder="Acompañante" value="<?php echo $row['aco_cli']  ?>">
      </div>

      <div class="col-md-7" style="margin-left: 80px;" >
        <label for="sta_cli" class="form-label text-center">Estado del cliente</label>
        <input type="text" class="form-control mb-3" name="sta_cli" placeholder="Estado" value="<?php echo $row['sta_cli']  ?>">  
      </div>  

      <div class="col-md-7" style="margin-left: 80px;" >
      <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
      </div>  
      
      <br>    
    </form>

  </div>
</div>

<script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../js/eje.js" type="module"></script>
<script type="text/javascript" src="../js/all.js"></script>


</body>
</html>