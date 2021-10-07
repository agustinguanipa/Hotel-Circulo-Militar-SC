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

$fky_per=$_POST['fky_per'];
$fky_tcli=$_POST['fky_tcli'];
$ciu_cli=$_POST['ciu_cli'];
$pro_cli=$_POST['pro_cli'];
$aco_cli=$_POST['aco_cli'];
$sta_cli=$_POST['sta_cli'];

$sql="UPDATE cliente SET  fky_tcli= '$fky_tcli', ciu_cli='$ciu_cli',pro_cli='$pro_cli',aco_cli='$aco_cli',sta_cli='$sta_cli' WHERE fky_per='$fky_per'";

$query=mysqli_query($cone,$sql);


    if($query){
        Header("Location: ../fronentd/admin/cclientes.php");
    }
?>