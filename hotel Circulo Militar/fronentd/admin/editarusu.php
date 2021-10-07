
<?php

session_start();

 


if ($_SESSION['cedula']!=null) {
  




?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registro</title>
	 
  <link rel="stylesheet" href="../../css/all.css">
  <link rel="stylesheet" href="../../css/all.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-utilities.css">
  <link rel="stylesheet" type="text/css" href="../css/body.css">
  <link rel="stylesheet" type="text/css" href="../css/formularios.css">
  <link rel="stylesheet" type="text/css" href="../css/consultas.css">
  <link rel="stylesheet" type="text/css" href="../css/logos.css">
 

</head>
<body>
	<?php 
  include '../../backend/conexion.php';
  $c=$_GET['ced'];
     $sl="SELECT * FROM `usuario`,personas WHERE usuario.fky_per='$c' AND personas.ced_per='$c'";
     $ecu=mysqli_query($cone,$sl);

     while ($v=mysqli_fetch_array($ecu)) {
       
    
   ?>



<!--donde va toda la info o central de la pagina      -->
<section class="align-self-center" >
	<div class="container formula" class="container"   >

	<div  class="margin-left 500px;">
	<form method="POST" action="../../backend/edusu.php?ced=<?php echo $_GET['ced'];?>" >
  <td colspan="12"  class="table-borderless bg-dark "><h4><b class="text-black">Consulta Personal</b></h4></td>
  <div class="row">
    
    <div class="form-group col-md-4">
      <label for="ced_usu" class="c">cedula de identidad</label>
      <input type="text" class="form-control" id="ced_usu" value="<?php echo $c ?>"  name="ced_per" required="Solo numeros" maxlength="8" pattern="[0-9]+">
    </div>
    <div>
   <div class="form-group col-md-4">
      <label for="nom1_usu" class="c">Primer nombre</label>
      <input type="text" class="form-control" id="nom1_usu" value="<?php echo $v['nom1_per'] ?>" name="nom1_per" required
      maxlength="30" minlength="2" pattern="[A-a-z-Z]+" >
    </div>
    </div>

     <div class="form-group col-md-4">
      <label for="nom2_usu" class="c">Segundo nombre</label>
      <input type="text" class="form-control" id="nom2_usu" value="<?php echo $v['nom2_per'] ?>" name="nom2_per" maxlength="30" minlength="2" pattern="[A-a-z-Z]+">
    </div>
  </div>
   <!-- segunda fila   -->
   <div class="row">
   	
   
  <div class="form-group col-md-4">
    <label for="ape1_usu" class="c">Primer apellido</label>
    <input type="text" class="form-control" id="ape1_usu" value="<?php echo $v['ape1_per'] ?>" name="ape1_per" required maxlength="30" minlength="2" pattern="[A-a-z-Z]+">
  </div>

  <div>
  <div class="form-group col-md-4">
    <label for="ape2_usu" class="c">Segundo apellido</label>
    <input type="text" class="form-control" id="ape2_usu" value="<?php echo $v['ape2_per'] ?>" name="ape2_per" maxlength="30" minlength="2" pattern="[A-a-z-Z]+">
  </div>
  </div>

  <div>
  <div class="form-group col-md-4">
    <label for="cor_usu" class="c">Correo</label>
    <input type="email" class="form-control" id="cor_usu" value="<?php echo $v['cor_per'] ?>" name="cor_per" maxlength="50">
  </div>
     </div>
     </div>

     <!--tercera fila-->
  <div class="row">
    <div class="form-group col-md-4">
      <label for="tel1_usu" class="c">Telefono movil</label>
      <input type="text" class="form-control" id="tel1_usu" value="<?php echo $v['tel1_per'] ?>" name="tel1_per" required
      maxlength="11" minlength="10" pattern="[0-9]+">
    </div>

    <div>
    <div class="form-group col-md-4">
    <label for="tel2_usu" class="c">Telefono fijo</label>
    <input type="text" class="form-control" id="tel2_usu" value="<?php echo $v['tel2_per'] ?>" name="tel2_per" maxlength="11" minlength="10" pattern="[0-9]+">
  </div>
     </div>  

     <div>
    <div class="form-group col-md-4">
    <label for="tel2_usu" class="c">Nombre de Usuario</label>
    <input type="text" class="form-control" id="nom_usu" value="<?php echo $v['nom_usu'] ?>" name="nom_usu" maxlength="11" minlength="10">
  </div>
     </div> 

     <div>
    <div class="form-group col-md-4">
    <label for="tel2_usu" class="c">Contraseña</label>
    <input type="password" class="form-control" id="pass_usu" value="<?php echo $v['pass_usu'] ?>" name="pass_usu" maxlength="11" minlength="10" pattern="[0-9]+">
  </div>
     </div>  


  </div>
   <!-- cuarta fila   -->
     
    
     
     </div>
    <?php  } ?>
     <!-- ultima fila donde va el boton  -->

     <div class="row">

     	<div class="form-group col-md-2">
     		
     	</div>

      <div class="form-group col-md-4 separador">
        <button type="submit" class=" btn btn-primary btn-lg col-12" id="enviar" name="enviar"><i class="fas fa-user text-light"> Editar</i></button>
      </div>

     	<div class="form-group col-4 separador">
        <a href="principaladmin.php"><button type="button" class=" btn btn-danger btn-lg col-12" id="cancelar" name="cancelar"><i class="fas fa-times-circle"></i> cancelar</button></a>
    
      </div>
      
     	<div class="form-group col-md-2">
     		
     	</div>

     </div>
    

    	
 
  


</form>
</div>
</div>
</section>

<script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
  <script src="../js/all.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>

<?php 

}


else
{
  echo "holis";
}



?>