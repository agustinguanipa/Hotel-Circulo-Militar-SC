  <!-- <?php
 include 'conexion.php';

 

 $ced=$_REQUEST['ced_cli'];
   $sql="delete  from tam_cli where ced_cli='$ced'";
   $cons=mysqli_query($cone,$sql);
   if($cons){
     echo "<script>alert('Se elimino un cliente')</script>";
     echo "<script>location.href='clientes.php'</script>";
   }



?>
-->