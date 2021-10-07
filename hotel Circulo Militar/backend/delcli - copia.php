<?php
    include 'conexion.php';

if(isset($_GET)) {

    $ced_per=$_GET['ced'];

    $sql="DELETE FROM cliente WHERE fky_per = '$ced_per';";
    $ocp=mysqli_query($cone,$sql);

    if($ocp){
        Header("Location: ../fronentd/admin/cclientes.php");
    }
}
/*
if($cli){
    echo "<script>location.href='../fronentd/admin/index.php</script>";
}else{
    
}
*/
?>