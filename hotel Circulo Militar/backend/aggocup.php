<?php 
include 'conexion.php';

$ced=$_POST['ced'];
$hab=$_REQUEST['cod'];
$days=$_POST['days'];


$sql="INSERT INTO `ocupada` (`id`, `fky_cli`, `fky_hab`, `days`, `sta_ocu`) VALUES (NULL, '26404237', '$hab', '$days', 'A');";
$sql2="UPDATE `habitacion` SET `sta_hab` = 'O' WHERE `habitacion`.`id` = $hab;";


$aggr=mysqli_query($cone,$sql);
$up=mysqli_query($cone,$sql2);

if ($aggr && $up) {
   echo "<script>location.href='../fronentd/admin/opcocup.php?cod=$hab';</script>";
}

else
{
    echo "<script>
    alert ('No se registro la ocupacion');
    location.href='../fronentd/admin/aggocu.php?cod=$hab';</script>";
}




 ?>