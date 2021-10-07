 <?php
 include 'conexion.php';

 

 $ced=$_REQUEST['ced_per'];
   $sql="delete  from personas where ced_per='$ced'";
   $cons=mysqli_query($cone,$sql);
   if($cons){
     echo "<script>alert('Se elimino un cliente')</script>";
     echo "<script>location.href='../../fronentd/cclientes.php'</script>";
   }else{
    echo "<script>alert('Se elimino un cliente')</script>";
    echo "<script>location.href='../fronentd/cclientes.php'</script>";
   }



?>
