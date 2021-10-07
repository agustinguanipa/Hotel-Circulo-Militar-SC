<?php

include 'conexion.php';

if(isset($_POST['enviar'])){

$ced=$_POST['ced_per'];
$nom=$_POST['nom1_per'];
$nom2=$_POST['nom2_per'];
$ape=$_POST['ape1_per'];
$ape2=$_POST['ape2_per'];
$cor=$_POST['cor_per'];
$tel1=$_POST['tel1_per'];
$tel2=$_POST['tel2_per'];
$usu=$_POST['nom_usu'];
$pass=$_POST['pass_usu'];




$sql="UPDATE `usuario` SET `nom_usu` = '$usu', `pass_usu` = '$pass' WHERE `usuario`.`fky_per` = '$ced';";
$sul="UPDATE `personas` SET `nom1_per` = '$nom', `nom2_per` = '$nom2', `ape1_per` = '$ape', `ape2_per` = '$ape2', `tel1_per` = '$tel1', `tel2_per` = '$tel2', `cor_per` = '$cor' WHERE `personas`.`ced_per` = '$ced';";
      $cons=mysqli_query($cone,$sql);
      $con=mysqli_query($cone,$sul);
      if($cons){
       echo"<script>alert ('modificado');
       location.href='../fronentd/admin/cper.php';</script>";
      }

}
?>